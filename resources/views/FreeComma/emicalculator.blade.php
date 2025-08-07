@extends('layoutstwo.apptwo')
@section('title', 'Online free comma separator tool')
@section('contenttwo')
    <style>
        .slider-value {
            font-weight: bold;
        }

        .table-container {
            overflow-x: auto;
        }
    </style>

    <div class="container my-5">
        <h2 class="text-center mb-4">EMI Calculator Clone</h2>

        <!-- Loan Type Tabs -->
        <ul class="nav nav-tabs mb-4" id="loanTab">
            <li class="nav-item"><a class="nav-link active" data-loan="Home" href="#">Home Loan</a></li>
            <li class="nav-item"><a class="nav-link" data-loan="Personal" href="#">Personal Loan</a></li>
            <li class="nav-item"><a class="nav-link" data-loan="Car" href="#">Car Loan</a></li>
        </ul>

        <!-- Inputs -->
        <div class="card p-4 mb-4">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Loan Amount</label>
                <div class="col-sm-9">
                    <input type="range" class="form-range" id="loanAmount" min="1000" max="10000000" step="1000">
                    ₹ <span class="slider-value" id="loanAmountValue">500000</span>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Interest Rate (%)</label>
                <div class="col-sm-9">
                    <input type="range" class="form-range" id="interestRate" min="1" max="20" step="0.1">
                    <span class="slider-value" id="interestRateValue">7.5</span>%
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Tenure (Years)</label>
                <div class="col-sm-9">
                    <input type="range" class="form-range" id="loanTenure" min="1" max="30" step="1">
                    <span class="slider-value" id="loanTenureValue">10</span> Years
                </div>
            </div>

            <!-- Results -->
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="technology-shadow">
                        <h5>Loan EMI</h5>
                        <p class="text-success">₹ <span id="emiResult">0</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="technology-shadow">
                        <h5>Total Interest</h5>
                        <p class="text-danger">₹ <span id="totalInterest">0</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="technology-shadow">
                        <h5>Total Payment</h5>
                        <p class="text-primary">₹ <span id="totalPayment">0</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row mb-5">
            <div class="col-md-6">
                <h5 class="text-center">Principal vs Interest</h5>
                <canvas id="pieChart"></canvas>
            </div>
            <div class="col-md-6">
                <h5 class="text-center">Amortization Over Time</h5>
                <canvas id="barChart"></canvas>
            </div>
        </div>

        <!-- Amortization Table -->
        <div class="table-container">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Year</th>
                        <th>Principal Paid (A)</th>
                        <th>Interest Paid (B)</th>
                        <th>Total Payment (A + B)</th>
                        <th>Balance</th>
                        <th>Loan Paid To Date (%)</th>
                    </tr>
                </thead>
                <tbody id="amortizationTable"></tbody>
            </table>
        </div>
    </div>

    <script>
        const loanAmount = document.getElementById('loanAmount');
        const interestRate = document.getElementById('interestRate');
        const loanTenure = document.getElementById('loanTenure');

        const loanAmountValue = document.getElementById('loanAmountValue');
        const interestRateValue = document.getElementById('interestRateValue');
        const loanTenureValue = document.getElementById('loanTenureValue');

        const emiResult = document.getElementById('emiResult');
        const totalInterest = document.getElementById('totalInterest');
        const totalPayment = document.getElementById('totalPayment');

        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const barCtx = document.getElementById('barChart').getContext('2d');
        let pieChart, barChart;

        function calculateEMI() {
            const P = parseFloat(loanAmount.value);
            const annualRate = parseFloat(interestRate.value);
            const years = parseInt(loanTenure.value);

            const r = annualRate / 12 / 100;
            const n = years * 12;

            const emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
            const totalPay = emi * n;
            const interest = totalPay - P;

            emiResult.innerText = emi.toFixed(2);
            totalInterest.innerText = interest.toFixed(2);
            totalPayment.innerText = totalPay.toFixed(2);

            updatePieChart(P, interest);
            updateBarChart(P, interest, emi, r, n);
            generateAmortizationTable(P, r, n, emi);
        }

        function updatePieChart(principal, interest) {
            if (pieChart) pieChart.destroy();
            pieChart = new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: ['Principal', 'Interest'],
                    datasets: [{
                        data: [principal, interest],
                        backgroundColor: ['#28a745', '#dc3545']
                    }]
                }
            });
        }

        function updateBarChart(P, interest, emi, r, n) {
            let yearlyData = [],
                principalPaid = [],
                interestPaid = [],
                labels = [];
            let balance = P;

            for (let year = 1; year <= n / 12; year++) {
                let principalY = 0,
                    interestY = 0;
                for (let month = 1; month <= 12; month++) {
                    const interestM = balance * r;
                    const principalM = emi - interestM;
                    principalY += principalM;
                    interestY += interestM;
                    balance -= principalM;
                    if (balance < 0) balance = 0;
                }
                labels.push(`Year ${year}`);
                principalPaid.push(principalY);
                interestPaid.push(interestY);
            }

            if (barChart) barChart.destroy();
            barChart = new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                            label: 'Principal',
                            data: principalPaid,
                            backgroundColor: '#28a745'
                        },
                        {
                            label: 'Interest',
                            data: interestPaid,
                            backgroundColor: '#dc3545'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function generateAmortizationTable(P, r, n, emi) {
            const tbody = document.getElementById('amortizationTable');
            tbody.innerHTML = '';
            let balance = P,
                paid = 0;

            for (let year = 1; year <= n / 12; year++) {
                let principalY = 0,
                    interestY = 0;

                for (let month = 1; month <= 12; month++) {
                    const interestM = balance * r;
                    const principalM = emi - interestM;
                    principalY += principalM;
                    interestY += interestM;
                    balance -= principalM;
                    if (balance < 0) balance = 0;
                }

                const totalY = principalY + interestY;
                paid += totalY;
                const row = `<tr>
            <td>${year}</td>
            <td>${principalY.toFixed(2)}</td>
            <td>${interestY.toFixed(2)}</td>
            <td>${totalY.toFixed(2)}</td>
            <td>${balance.toFixed(2)}</td>
            <td>${((paid / (emi * n)) * 100).toFixed(2)}%</td>
        </tr>`;
                tbody.innerHTML += row;
            }
        }

        function updateValues() {
            loanAmountValue.innerText = loanAmount.value;
            interestRateValue.innerText = interestRate.value;
            loanTenureValue.innerText = loanTenure.value;
            calculateEMI();
        }

        loanAmount.addEventListener('input', updateValues);
        interestRate.addEventListener('input', updateValues);
        loanTenure.addEventListener('input', updateValues);

        document.querySelectorAll('[data-loan]').forEach(tab => {
            tab.addEventListener('click', e => {
                e.preventDefault();
                document.querySelectorAll('[data-loan]').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });

        // Initial setup
        loanAmount.value = 200000;
        interestRate.value = 7.5;
        loanTenure.value = 10;
        updateValues();
    </script>


@endsection
