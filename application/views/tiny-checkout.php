                        <?php
                           $sqlTr  = $this->db->query("SELECT * FROM tbl_shipping WHERE `email_address` = '$email'");
                            foreach ($sqlTr->result() as $bar){
                                $country = $bar->country;
                                $address = $bar->address;
                                $zip = $bar->zip;
                                $email = $bar->email_address;
                                $phone = $bar->phone;
                                $city = $bar->city;
                                /*
                                    address, city, zip, country, email_address, phone
                                */
                        ?>

<input type="hidden" class="form-control" id="country" name="country" value="<?php echo $row->code ?>" >
<input type="hidden" class="form-control" id="s_address" name="s_address" value="<?php echo $row->address ?>" >
<input type="hidden" class="form-control" id="s_email" name="s_email" value="<?php echo $row->email ?>" >
<input type="hidden" class="form-control" id="zip" name="zip" value="<?php echo $row->zip ?>" >
<input type="hidden" class="form-control" id="city" name="city" value="<?php echo $row->city ?>" >
<input type="hidden" class="form-control" id="phone" name="phone" value="<?php echo $row->phone ?>" >

                        <?php } ?>