<?php 
    $category_o = array(  'name' => 'Day Tours from Kuching',
                                  'main_link' => 'day_kuching',
                                  'packages' => array( 'Kuching City Tour', 'Sarawak Cultural Village', 'Bidayuh Longhouse Experience', 'Frogs of Borneo' ),
                                  'links' => array( 'kch_city_tour', 'swk_cultural_village', 'bidayuh_longhouse', 'borneo_frogs' ),
                                  'images' => array( 'daykuching/kuching.png', 'daykuching/culturalvil.png', 'daykuching/bidayuh_longhouse.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png', 'daykuching/frogs.png' )
                        );
?>
<div class="container">
    <div class="row">
        <div class="span12 startOpacity">
            <ul class="breadcrumb">
              <li><a href="<?php echo base_url('category'); ?>">Tour Packages</a> <span class="divider">/</span></li>
              <!-- <li class="active"><?php echo $category['name']; ?></li> -->
              <li class="active"><?php echo $query_c_specific[0]['c_name']; ?></li>
            </ul>
            <div class="row">
                <div class="span4">
                    <ul class="sidebar nav nav-list">
                        <li class="nav-header"><?php echo $query_c_specific[0]['c_name']; ?></li>
                      <?php 
                        foreach($query_p_by_c as $package)
                        {
                      ?>
                        <li><a href="<?php echo base_url('/category/package/' . $package['p_link_to']); ?>"><?php echo $package['p_name']; ?></a></li>
                      <?php 
                        }

                        foreach($query_c as $category) 
                        {
                          if($category['c_name'] != $query_c_specific[0]['c_name'])
                          {
                      ?>
                            <hr />
                            <li class="nav-header"><a href="<?php echo base_url('category/' . $category['c_link_to']) ?>"><?php echo $category['c_name']; ?></a></li>
                      <?php
                          }
                        }
                      ?>
                      <br/>
                    </ul>
                </div>

                <div class="span8">
                  <?php
                  $array_size = sizeof($query_p_by_c);
                  $count = 0;
                  for ($i = 0; $i < $array_size / 2; $i++) 
                  {
                  ?>
                  <div class="row">
                  <?php for ($j = 0; $j < 2; $j++) 
                      { 
                        if($count < $array_size)
                        {
                    ?>
                     <div class="span4">
                         <a class="tile" href="<?php echo base_url('/category/package/' . $query_p_by_c[$count]['p_link_to']); ?>">
                             <div class="tile one" style = "background-image: url('<?php echo base_url('img/tiles') . '/' . $category_o['images'][$count]; ?>');">
                                 <p class="tilefont"><?php echo $query_p_by_c[$count]['p_name']; ?></p>
                             </div>
                         </a>
                     </div>
                  <?php 
                        $count++;
                        }
                      }
                  ?> 
                </div>
                  <br>
                  <?php    
                  }
                  ?>
               </div>
            </div>
        </div>
    </div>
</div>



    