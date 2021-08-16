<!DOCTYPE html>
<html>
    <head>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 4cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 1cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
            }



            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <table width="100%">
            <?php 
                    $array_bln	 = array (
                        1 =>   'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    );
                    
                    $bulan= strtoupper($array_bln[ltrim($request->bulan,0)]);
                ?>
                <tr>
                    <td align="left" style="padding-left:100px;font-family: sans-serif">
                        <table>
                            <tr>
                                <td><font style="font-size: 10pt;font-weight: bold ">PT. PERTAMINA DANA VENTURA</font></td>
                            </tr>
                            <tr>
                                <td><font style="font-size: 10pt;font-weight: bold ">REPORT DETAIL KAS/BANK PER BAGIAN</font></td>
                            </tr>
                            <tr>
                                <td><font style="font-size: 10pt;font-weight: bold ">CASH JUDEX BULAN {{strtoupper($bulan) }} {{ $request->tahun }}</font></td>
                            </tr>
                        </table>
                    </td>
                   
                    <td align="center" style="">
                        <img align="right" src="{{ public_path() . '/images/pertamina.jpg' }}" width="160px" height="80px" style="padding-right:45px;">
                    </td>
                </tr>
            </table>
        </header>
        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <font style="font-size: 10pt;font-style: italic">Tanggal Cetak: {{ $request->tanggal}}</font>
            <table width="100%" style="font-family: sans-serif;border-collapse: collapse;" border="1">
                <thead>
                    <tr style="text-align:center;font-size: 8pt;">
                        <td>JK</td>
                        <td>BLN</td>
                        <td>CJ</td>
                        <td>NOBUKTI</td>
                        <td>PK</td>
                        <td>ST</td>
                        <td>SANPER</td>
                        <td>JB</td>
                        <td>LP</td>
                        <td>BAGIAN</td>
                        <td>RECT</td>
                        <td>AMOUNT RUPIAH</td>
                        <td>AMOUNT DOLAR</td>
                    </tr>
                <thead>
                <tbody>
                    <?php $a=0; ?>
                    @foreach($data_list as $data)
                    <?php $a++ ?>
                    <tr style="text-align:center;font-size: 8pt;">
                        <td>{{ $data->jk}}</td>
                        <td>{{ $data->bulan }}</td>
                        <td>{{ $data->cj}}</td>
                        <td>{{ $data->voucher }}</td>
                        <td>{{ $data->pk}}</td>
                        <td>{{ $data->store }}</td>
                        <td>{{ $data->account}}</td>
                        <td>{{ $data->jb}}</td>
                        <td>{{ $data->lokasi}}</td>
                        <td>{{ $data->bagian}}</td>
                        <td>{{ $data->lineno }}</td>
                        <td style="text-align:right;">{{ $data->rate <= 0 ? number_format($data->totprice,0) : number_format($data->totprice) }}</td>
                        <td style="text-align:right;">{{ $data->ci == 2 ? number_format($data->totprice) : '0' }}</td>
                    </tr>
                    <?php 
                        $rup[$a] = $data->rate <= 0 ? number_format($data->totprice,0) : number_format($data->totprice);
                        $dol[$a] = $data->ci == 2 ? number_format($data->totprice) : '0';
                      ?>
                    @endforeach
                    <tr>
                    <?php 
                        $total_rup = array_sum($rup); 
                        $total_dol= array_sum($dol);  
                     ?>
                        <td colspan="11" style="font-size: 8pt;text-align:right;">TOTAL PER BAGIAN</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_rup,0) }}</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_dol,0) }}</td>
                    </tr>
                    <tr>
                        <td colspan="11" style="font-size: 8pt;text-align:right;">TOTAL PER CJ</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_rup,0) }}</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_dol,0) }}</td>
                    </tr>
                    <tr>
                        <td colspan="11" style="font-size: 8pt;text-align:right;">GRAND TOTAL</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_rup,0) }}</td>
                        <td style="font-size: 8pt;text-align:right;">{{ number_format($total_dol,0) }}</td>
                    </tr>
                <tbody>

            </table>
        </main>
        
    </body>
</html>
