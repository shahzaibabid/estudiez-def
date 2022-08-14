<div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>                                        
                                    <tr>
                                        <th> Students </th>
                                        <th> English </th>
                                        <th> Sindhi </th>
                                        <th> Urdu </th>
                                        <th> P_Studies </th>
                                        <th> Science </th>
                                        <th> Islamiat / Religion </th>
                                        <th> Math </th>
                                        <th> Details </th>
                                    </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $cls = "SELECT c.id FROM `class` c WHERE `Class_name` = 'VI' ORDER BY `id` DESC ";
                                        $clsres = mysqli_query($conn, $cls);
                                        $cls_row = mysqli_fetch_array($clsres);
                                        $name = $cls_row["id"];
                                        $users = "SELECT u.id,u.F_name FROM `users` u WHERE `Class_id` = '$name' ORDER BY `id` DESC";                                        
                                        $user_res = mysqli_query($conn,$users);
                                        if(mysqli_num_rows($user_res)) {
                                            while($row = mysqli_fetch_array($user_res)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["F_name"]; ?></td>
                                                    <?php
                                                        $id = 3;
                                                        $eng = "SELECT * FROM `english` WHERE `user_id` = '$id' ORDER BY `id` DESC ";
                                                        $eng_res = mysqli_query($conn,$eng);
                                                        if(mysqli_num_rows($eng_res)) {
                                                            while($eng_row = mysqli_fetch_array($eng_res)) {
                                                                ?>
                                                                <?php if($eng_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $eng_row[5]; ?></td><?php }else { ?><td><?php echo $eng_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $sind = "SELECT * FROM `sindhi` WHERE `user_id` = '$id' ORDER BY `id` DESC";
                                                        $sind_res = mysqli_query($conn,$sind);
                                                        if(mysqli_num_rows($sind_res)) {
                                                            while($sind_row = mysqli_fetch_array($sind_res)) {
                                                                ?>
                                                                <?php if($sind_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $sind_row[5]; ?></td><?php }else { ?><td><?php echo $sind_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $urdu = "SELECT * FROM `urdu` WHERE `user_id` = '$id' ORDER BY `id` DESC ";
                                                        $urdu_res = mysqli_query($conn,$urdu);
                                                        if(mysqli_num_rows($urdu_res)) {
                                                            while($urdu_row = mysqli_fetch_array($urdu_res)) {
                                                                ?>
                                                                <?php if($urdu_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $urdu_row[5]; ?></td><?php }else { ?><td><?php echo $urdu_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $p_studies = "SELECT * FROM `p_studies` WHERE `user_id` = '$id' ORDER BY `id` DESC";
                                                        $p_studies_res = mysqli_query($conn,$p_studies);
                                                        if(mysqli_num_rows($p_studies_res)) {
                                                            while($p_studies_row = mysqli_fetch_array($p_studies_res)) {
                                                                ?>
                                                                <?php if($p_studies_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $p_studies_row[5]; ?></td><?php }else { ?><td><?php echo $p_studies_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $sci = "SELECT * FROM `science` WHERE `user_id` = '$id' ORDER BY `id` DESC ";
                                                        $sci_res = mysqli_query($conn,$sci);
                                                        if(mysqli_num_rows($sci_res)) {
                                                            while($sci_row = mysqli_fetch_array($sci_res)) {
                                                                ?>
                                                                <?php if($sci_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $sci_row[5]; ?></td><?php }else { ?><td><?php echo $sci_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $rel = "SELECT * FROM `islamiat_rel` WHERE `user_id` = '$id' ORDER BY `id` DESC ";
                                                        $rel_res = mysqli_query($conn,$rel);
                                                        if(mysqli_num_rows($rel_res)) {
                                                            while($rel_row = mysqli_fetch_array($rel_res)) {
                                                                ?>
                                                                <?php if($rel_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $rel_row[5]; ?></td><?php }else { ?><td><?php echo $rel_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }

                                                        $math = "SELECT * FROM `math` WHERE `user_id` = '$id' ORDER BY `id` DESC ";
                                                        $math_res = mysqli_query($conn,$math);
                                                        if(mysqli_num_rows($math_res)) {
                                                            while($math_row = mysqli_fetch_array($math_res)) {
                                                                ?>
                                                                <?php if($math_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $math_row[5]; ?></td><?php }else { ?><td><?php echo $math_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                    <td><a href="./profile.php?id=<?php echo $id; ?>"><button class="btn btn-primary text-light">DETAILS</button></a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>