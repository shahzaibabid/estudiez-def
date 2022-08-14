
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> Time </th>
                              <th> Monday </th>
                              <th> Tuesday </th>
                              <th> Wednesday </th>
                              <th> Thursday </th>
                              <th> Friday </th>
                              <th> (Extra class) <br> Saturday</th>
                            </tr>
                          </thead>
                          <tbody>      
                            <?php
							 $x = $fetch1[2];
							 switch ($x) {
								case 'VI':
									$sel_r = "SELECT * FROM `timetable6`";
									break;
								
								case 'VII':
									$sel_r = "SELECT * FROM `timetable7`";
									break;
							
								case 'VIII':
									$sel_r = "SELECT * FROM `timetable8`";
									break;
							
								case 'IX':
									$sel_r = "SELECT * FROM `timetable9`";
									break;
							
								case 'X':
									$sel_r = "SELECT * FROM `timetable10`";
									break;
							}
                          
                              $res_r = mysqli_query($conn, $sel_r);
                              while($row_r = mysqli_fetch_array($res_r)) {

                            ?>
                        <tr >
                            <td ><input type="text" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[1]; ?>" readonly></td>
                            <td><input type="text" name="mon<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[2]; ?>"></td>
                            <td><input type="text" name="tues<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[3]; ?>"></td>
                            <td><input type="text" name="wed<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[4]; ?>"></td>
                            <td><input type="text" name="thurs<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[5]; ?>"></td>
                            <td><input type="text" name="fri<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[6]; ?>"></td>
                            <td><input type="text" name="sat<?php echo $i; ?>" style="background-color: transparent; color: black; border:none;" value="<?php echo $row_r[7]; ?>"></td>
                        </tr>
                        <?php
                              }
                        ?>
                          </tbody>
                        </table>                        
               