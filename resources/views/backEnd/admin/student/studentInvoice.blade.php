<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Invoice</title>
    
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
        
        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        
        .rtl table {
            text-align: right;
        }
        
        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{asset("frontend/img/logo.png")}}" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice <br>
                                Date: {{now()->format('d-m-Y')}} <br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                220 (3rd floor), Begum Rokeya Sarani, <br> West Kufrul Taltola, <br> Mirpur,dhaka 1207
                            </td>
                            
                            <td style="text-align: left;" colspan="2">
                                <b> Name: </b> {{$student->name}} <br>
                                <b> Student Id: </b> {{$student->student_id}} <br>
                                <b> Referenced By: </b> {{$student->staff_name}} <br>
                                <b> Batch Number: </b> {{$student->batch_number}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table>
            <tr class="heading">
                <td>
                    Course Name
                </td>
                <td>
                    Duration
                </td>
                <td>
                    Payment Method
                </td>
                <td>
                    Total
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    {{$student->course_name}}
                </td>
                <td>
                    {{$student->total_month}} month
                </td>
                <td>
                    {{$student->payment_methods_name}}
                </td>
                
                <td>
                    {{$student->total_amount}}
                </td>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0">
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b> Course: </b> {{$student->course_name}} <br>
                                <b> Course Fee: </b> {{$student->total_amount}} <br>
                                <b> Batch Number: </b> {{$student->batch_number}} <br>
                                <b> Student Id: </b> {{$student->student_id}}
                            </td>
                            
                            <td style="text-align: right;" colspan="3">
                                <b> Subtotal: </b> {{$student->total_amount}}<br>
                                <b> Paid Amount: </b> {{$student->paid_amount}}<br>
                                <b> Unpaid: </b> {{$student->due_amount}}<br>
                                <b> Total Payable: </b> {{$student->due_amount}} 
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            {{-- <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Website design
                </td>
                
                <td>
                    $300.00
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Hosting (3 months)
                </td>
                
                <td>
                    $75.00
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Domain name (1 year)
                </td>
                
                <td>
                    $10.00
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: $385.00
                </td>
            </tr> --}}
        </table>
    </div>
</body>
</html>