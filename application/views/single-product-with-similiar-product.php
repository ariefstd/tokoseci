                                <?php
    $this->db->select('*');    
    $this->db->from('property',6);

    $query1 = $this->db->get();
    foreach ($query1->result() as $row1)
    {
        $image = $row1->image_name;
                                ?>                                               
                                            <div class="item">
                                                <a href="<?php echo base_url(); ?>images/<?php echo $image; ?>" class="ct-js-magnificPopupImage"><img src="<?php echo base_url(); ?>images/<?php echo $image; ?>" alt="Product 1" width="461" height="449"></a>
                                            </div>
    <?php } ?>                                        
                                        </div>
                                        <div id="sync2" class="owl-carousel ct-u-paddingBoth20">
                                <?php
    $this->db->select('*');
    $this->db->from('property',6);

    $query2 = $this->db->get();
    foreach ($query2->result() as $row2)
    {
        $image = $row2->image_name;
                                ?>                                             
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>images/<?php echo $image; ?>" alt="Product 3" width="96" height="90">
                                            </div>
    <?php } ?>