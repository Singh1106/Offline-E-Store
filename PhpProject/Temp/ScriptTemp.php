<?php
                      if(isset($_SESSION['id']))
                      {
                          mysqli_data_seek($check_query_users_items, 0);
                          mysqli_data_seek($check_query_users, 0);
                          while($row_users=mysqli_fetch_array($check_query_users)){
                          while($row_users_items= mysqli_fetch_array($check_query_users_items))
                          {if($row_users_items['status']==1 && $row_users_items['items_id']==$row_items['items_id'] && strcasecmp($row_users['email'],$_SESSION['email'])==0)
                         {?>
                             <input type="submit" class="btn-primary" value="Buy Now" name="buy">
                         <?php  break; }
                             else
                           {
                           ?>
                             <input type="submit" class="btn-primary" value="Add To Cart" name="a2c">
                           <?php  break; }
                      } break; } }
                      else
                      {?>
                         <input type="submit" class="btn-primary" value="Add To Cart" name="a2c"> 
                      
                        <?php }   
                      ?>