<!DOCTYPE html>
<html>
<head>
	<title>Faktur</title>
<style>
                            h1{
  font-family: sans-serif;
}

table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}

table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}

table th:first-child{  
  border-left:none;  
}

table tr {
  text-align: center;
  padding-left: 20px;
}

table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}

table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table tr:last-child td {
  border-bottom: 0;
}

table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
                    </style>
</head>
<body>
	<center><h1>faktur</h1></center>
	<table cellspacing='0'>
		<thead>
			  <tr>
                        <th>no</th>
                        <th scope="col">Nama Outlet</th>
                        <th scope="col">invoice</th>
                        <th scope="col">total</th>
                        <th scope="col">HPP</th>
                        <th scope="col">Laba</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <?php $no = 0;?>
                    @foreach ($PDFReport as $V)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $V->namaOutlet }}</td>
                            <td>{{ $V->invoice }}</td>
                            <td>{{ $V->grandTotal }}</td>
                            <td>{{ $V->HPP }}</td>
                            <td>{{ $V->laba }}</td>
                            
                        </tr>
                        @endforeach
                      
		</tbody>
	</table>
</body>
</html>o