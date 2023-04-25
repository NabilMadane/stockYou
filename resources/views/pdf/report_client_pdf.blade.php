<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Client  : {{$client['client_name']}}</title>
       <style>
           @page {
               margin: 0cm 0cm;
           }
           body {
               background-size: cover;
               background-repeat: no-repeat;
               padding: 10px 25px 0px 25px;
               height: 100%;
               position: relative;
               margin: 0 auto;
               color: black;
               font-size: 14px;
               font-family: 'dejavu sans', sans-serif;

           }

           .clearfix:after {
               content: "";
               display: table;
               clear: both;
           }

           a {
               color: #1b47a9 ;
               text-decoration: none;
           }

           #comp {
               font-size: 15px;
               color: black;
               font-weight: 600;
           }


           #total {
               float: right;
           }

           #total>table {
               border-collapse: collapse;
               border-spacing: 0;
               margin-bottom: 20px;
           }

           #total>table td {
               padding: 10px;
               background: #EEEEEE;
               line-height: 10px;
           }

           #total>table th {
               padding: 6px;
               background: darkturquoise;
               border-bottom: 1px solid #FFFFFF;
           }

           #total>table th {
               color: #fff;
               font-size: 12px;
               font-weight: 300;
           }

           #total>table tr:last-child {
               border-top: 2px solid;
           }

           #Title-heading {
               float: right;
               margin-right: 160px;
               margin-top: 40px;
               padding-left: 6px;
               min-height: 90px;
               font-size: 85%;
               font-size: 22px;
               color:#1b47a9 ;
               font-weight: 900;
           }

           #logo {
               float: left;
               margin-top: 8px;
               width: 280px;
           }

           #logo img {
               width: 180px;
           }

           #company {
               float: right;
               padding-left: 6px;
               min-height: 90px;
               font-size: 85%;
               padding: 1.5%;
           }

           .name {
               font-size: 22px;
           }

           #client .to {
               color: cornflowerblue;
               font-size: 22px;
           }

           h2.name {
               font-size: 1.4em;
               font-weight: normal;
               margin: 0;
               background: darkturquoise;
           }

           #invoice>table {
               width: 100%;
               border-collapse: collapse;
               border-spacing: 0;
               margin-bottom: 20px;
           }

           #invoice>table td {
               padding: 14px;
               background: #EEEEEE;
               line-height: 20px;
           }

           #invoice>table th {
               padding: 6px;
               border-bottom: 1px solid #FFFFFF;
               background: #1b47a9 ;
               color: #fff;
               font-size: 13px;
               font-weight: bold;
           }

           #client>table {
               width: 100%;
               border-collapse: collapse;
               border-spacing: 0;
               margin-bottom: 20px;
           }

           #client>table td {
               padding: 14px;
               background: #EEEEEE;
               line-height: 20px;
           }

           #client>table th {
               padding: 6px;
               background: #1b47a9 ;
               color: #fff;
               font-size: 13px;
               font-weight: bold;
           }

           #client {
               padding: 0!important;
               float: left;
               width: 50%;
               min-height: 90px;
               font-size: 85%;
           }

           #invoice {
               margin-right: 0px;
               width: 40%;
               float: right;
               padding-left: 6px;
               min-height: 90px;
               font-size: 85%;
               padding: 0%;
           }

           #invoice h1 {
               color: #1b47a9 ;
               font-size: 16px;
               line-height: 1em;
               font-weight: normal;
               margin: 0 0 10px 0;
           }

           #invoice .to {
               color: cornflowerblue;
           }

           #invoice .date {
               font-size: 1.1em;
               color: #777777;
           }

           #details_inv>table {
               width: 100%;
               border-collapse: collapse;
               border-spacing: 0;
               margin-bottom: 20px;
           }

           #details_inv>table td {
               padding: 6px;
               background: #EEEEEE;
               text-align: left;
           }

           #details_inv>table th {
               padding: 6px;
               text-align: left;
               border-bottom: 1px solid #FFFFFF;
               color: #fff;
               background: #1b47a9 ;
               font-size: 13px;
               font-weight: bold;
           }

           #details_inv>table td {
               text-align: left;
           }

           #details_inv>table td h3 {
               color: #57B223;
               font-size: 1.2em;
               font-weight: normal;
               margin: 0 0 0.2em 0;
           }

           #details_inv>table .no {
               color: #FFFFFF;
               font-size: 1.6em;
               background: #57B223;
           }

           #details_inv>table .Ref {
               text-align: left;
               font-size: 16px!important;
           }

           #details_inv>table .Payment {
               text-align: right;
               font-size: 16px!important;
           }

           #details_inv>table .mode {
               text-align: center;
               font-size: 16px!important;
           }

           #details_inv>table td.unit,
           #details_inv>table td.qty,
           #details_inv>table td.total {
               font-size: 1.2em;
           }

           #details_inv>table tbody tr:last-child td {
               border: none;
           }

           #details_inv>table tfoot td {
               padding: 10px 20px;
               background: #FFFFFF;
               border-bottom: none;
               font-size: 1.2em;
               white-space: nowrap;
               border-top: 1px solid #AAAAAA;
           }

           #details_inv>table tfoot tr:first-child td {
               border-top: none;
           }

           #details_inv>table tfoot tr:last-child td {
               color: #57B223;
               font-size: 1.4em;
               border-top: 1px solid #57B223;
           }

           #details_inv>table tfoot tr td:first-child {
               border: none;
           }

           #thanks {
               font-size: 2em;
               margin-bottom: 50px;
               margin-top: 228px;
           }

           #signature {
               color: #777777;
               width: 100%;
               height: 30px;
               position: absolute;
               bottom: 30;
               padding: 8px 0;
               text-align: center;
           }

           #notices {
               padding-left: 6px;
               border-left: 6px solid #1b47a9 ;
           }

           #notices .notice {
               font-size: 1.2em;
           }

           footer {
               color: #777777;
               width: 100%;
               height: 30px;
               position: absolute;
               bottom: 0;
               border-top: 1px solid #AAAAAA;
               padding: 8px 0;
               text-align: center;
           }

           #paiment {
               border: 2px solid;
               padding: 24px;
               width: 659px;
           }
       </style>
   </head>

   <body>
   <header class="clearfix">
       <div id="logo">
           {{-- <img  src="{{public_path('/images/'.$setting['logo'])}}">--}}
           <img src="{{public_path('/images/logo.png')}}">
       </div>

         <div id="Title-heading">
               Client  : {{$client['client_name']}}
         </div>
         </div>
      </header>
      <main>
         <div id="details" class="clearfix">
            <div id="client">
               <table class="table-sm">
                  <thead>
                     <tr>
                        <th class="desc">Customer Details</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <div><strong>Full Name:</strong> {{$client['client_name']}}</div>
                           <div><strong>Phone:</strong> {{$client['phone']}}</div>
                           <div><strong>Total Sales:</strong> {{$client['total_sales']}}</div>
                           <div><strong>Total Amount:</strong> {{$symbol}} {{$client['total_amount']}}</div>
                           <div><strong>Total Paid:</strong> {{$symbol}} {{$client['total_paid']}}</div>
                           <div><strong>Total Sales Due:</strong> {{$symbol}} {{$client['due']}}</div>
                           <div><strong>Total Sell Return Due:</strong> {{$symbol}} {{$client['return_Due']}}</div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div id="invoice">
               <table class="table-sm">
                  <thead>
                     <tr>
                        <th class="desc">Company Info</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <div id="comp">{{$setting['CompanyName']}}</div>
                           <div><strong>Address:</strong>  {{$setting['CompanyAdress']}}</div>
                           <div><strong>Phone:</strong>  {{$setting['CompanyPhone']}}</div>
                           <div><strong>Email:</strong>  {{$setting['email']}}</div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div id="details_inv">
            <h3 style="margin-bottom:10px">
                  All Sales ( Unpaid/Partial )
            </h3>
            <table  class="table-sm">
               <thead>
                  <tr>
                     <th>DATE</th>
                     <th>REF</th>
                     <th>PAID</th>
                     <th>DUE</th>
                     <th>PAYMENT STATUS</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($sales as $sale)
                  <tr>
                     <td>{{$sale['date']}} </td>
                     <td>{{$sale['Ref']}}</td>
                     <td>{{$symbol}} {{$sale['paid_amount']}} </td>
                     <td>{{$symbol}} {{$sale['due']}} </td>
                     <td>{{$sale['payment_status']}} </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </main>
   </body>
</html>
