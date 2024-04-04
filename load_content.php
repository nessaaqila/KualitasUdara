<?php

@include 'config.php';
@include 'pagination.php';


?>

<table id="tabel">
                        <thead>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;">No.</td>
                                <td style="text-align: center; vertical-align: middle;">ID Ruangan</td>
                                <td style="text-align: center; vertical-align: middle;">Suhu</td>
                                <td style="text-align: center; vertical-align: middle;">Kelembaban</td>
                                <td style="text-align: center; vertical-align: middle;">CO2</td>
                                <td style="text-align: center; vertical-align: middle;">Status</td>
                                <td style="text-align: center; vertical-align: middle;">Waktu</td>
                            </tr>
                        </thead>
                        
                        

                        <tbody>
                            
                            <?php
                            while($rows = $result->fetch_assoc())
                            {
                                ?>
                            <tr style="text-align: center; vertical-align: middle;">
                            <td style="text-align: center; vertical-align: middle;"><?php echo $rows['id_suhu']?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo $rows['id_ruangan']?></td>
                            <td><?php echo $rows['suhu']?></td>
                            <td><?php echo $rows['kelembaban']?></td>
                            <td><?php echo $rows['co2']?></td>
                            <td><?php echo $rows['status_udara']?></td>
                            <td><?php echo $rows['waktu']?></td>
                            </tr>
                            <?php
                            }
                            ?>
                            
                            
                            
                        </tbody>
                        
                    </table>