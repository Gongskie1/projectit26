<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payroll.css">
    
</head>
<body>
<div class="buttons-container">
      <button id="print">Download</button>
    </div>
 
    <div class="payroll-container">
        <table id="payroll" cellpadding="0" cellspacing="0">
            <td>
                <h1>123 COMPANY</h1>
                <p>New, Matina Pangi Rd,
                    Davao City, Davao del Sur <br>
                    123comp@gmail.com</p>
                <h2>PAYSLIP</h2>
              <table class="info">
                <thead>
                <tr>
                    <th>Payroll #</th>
                    <th>From</th>
                    <th>To</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#986386</td>
                        <td>2022/03/01</td>
                        <td>2022/04/01</td>
                    </tr>
                </tbody>
                <table class="emp">
                <thead>
                <tr>
                    <th>EMPLOYEE INFORMATION</th> 
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ANGELA LAMERA<br>
                            angela@gmail.com
                        </td>
                    </tr>
                </tbody>

                <table class="earnings">
                <thead>
                <tr>
                    <th>Earnings</th>
                    <th>Hours</th>
                    <th>rate</th>
                    <th>total</th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Standard Pay</td>
                        <td>40</td>
                        <td>12.50</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>Overtime Pay</td>
                        <td>40</td>
                        <td>12.50</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="background:#ABB2B9; font-weight:600;" >GROSSPAY</td>
                        <td style="background:#ABB2B9; font-weight:600;">500</td>
                    </tr>
                </tbody>
                <table class="deductions">
                <thead>
                <tr>
                    <th>DEDUCTIONS</th>
                    <th>PERCENT</th>
                    <th>AMOUNT</th>
                    <th>total</th>
                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tax</td>
                        <td>5%</td>
                        <td>12.50</td>
                        <td>12.50</td>
                    </tr>
                    <tr>
                        <td>SSS</td>
                        <td>2%</td>
                        <td>12.50</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="background:#ABB2B9; font-weight:600;">TOTAL DEDUCTIONS</td>
                        <td style="background:#ABB2B9; font-weight:600;">500</td>
                    </tr>
                </tbody>
                <table class="net_pay">
                <thead>
                <tr>
                    <th>NET PAY</th>
                    <th>46549894</th>
                </tr>
                </thead>
               

  <script src="html2canva.js"></script>
  <script type="text/javascript">
    document.getElementById('print').onclick = function(){
        var element = document.getElementById('payroll');
        var opt = {
            margin:0,
            font: 'Arial',
            filename: 'payroll.pdf',
            jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
        };
        html2pdf(element, opt);
    };
  </script>

               
</body>
</html>