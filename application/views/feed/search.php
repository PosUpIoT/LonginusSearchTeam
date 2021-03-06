<div class="container">

    <!-- Row -->
    <div class="row">

        <!-- Main Col -->
        <div class="col-md-8 main-col">

            <!-- Unicard -->
            <div class="unicard unicard-framed pad-20 mgb-30">
                <?php 
                    if(isset($data['results'])):

                ?>
                <div class="unicard-header bd-b">
                    <h4 class="fw-bold case-u unicard-title">Search <span class="fg-primary">results</span></h4>
                    <div class="fg-text-l unicard-subtitle">Found <?php echo $data['total'] ?> results<br></div>
                    
                                <?php
                                if(isset($data['parameters'])){

                                    echo '<h5 class="fw-bold case-u unicard-title">Parameters: <br><ul>';
                                    foreach($data['parameters'] as $key=>$param)
                                    {
                                        foreach($param as $key2=>$param2)
                                        {
                                            echo '<li>'.$key2.':'.$param2.'</li>';
                                        }
                                    }
                                    echo '</ul>';
                                }
                                ?>
                    </h5>
                </div>
                <!-- post list -->
                <?php 

                    endif;
                ?>

                <?php
                if(isset($data['results']))
                {
                    if(count($data['results']))
                    {
                        echo '<ul class="unimedia-list post-list mgb-20">';
                        foreach($data['results'] as $post) {
                            ?>

                            <li>
                                <!-- unimedia -->
                                <div class="unimedia-cell">
                                    <div class="unimedia-img">
                                        <a href="<?php echo '/post/show/'.$post['id'] ?>" class="img-link"><img src="<?php echo $post['path'] ?>" alt="" /></a>
                                    </div>
                                </div>
                                <div class="unimedia-cell cell-max">
                                    <h5 class="unimedia-subtitle fg-accent hidden-xs"><a href="#"><?php echo $post['user'] ?></a></h5>
                                    <h4 class="unimedia-title"><a href="<?php echo '/post/show/'.$post['id'] ?>"><?php echo $post['title'] ?></a></h4>
                                    <div class="unimeta post-meta hidden-xs">
                                        <span><i class="ti-time fg-text-l"></i><?php echo $post['create_date'] ?></span>
                                        <span><i class="ti-comment-alt fg-text-l"></i>XX comments</span>
                                    </div>
                                    <p>
                                        <?php $this->load->helper('text'); echo character_limiter($post['description'], 200); ?>
                                    </p>
                                </div>
                                <!-- /unimedia -->
                            </li>
                            <?php
                        }
                        echo '</ul>';
                    }else{
                        echo '<h1>Nenhum resultado encontrado</h1><br><p class="suggestion">Para voltar ao feed <a href="'.base_url('index.php/feed').'">clique aqui</a></p>';
                    }

                }else{

                        echo '<h1>Nenhum resultado encontrado</h1><br><p class="suggestion">Para voltar ao feed <a href="'.base_url('index.php/feed').'">clique aqui</a></p>'; 
                }


                ?>

            </div>

            <!-- <a href="#" class="btn btn-block btn-primary btn-pad-xl case-u">load more</a> -->
            <p><?php if(isset($data['links'])){ echo $data['links'];} ?></p>

        </div>
        <!-- /Main Col -->

    <!-- Side Col -->
    <div class="col-md-4 side-col">

      <!-- unicard -->
      <div class="unicard unicard-framed pad-20 ajax-list" data-url="/index.php/feed/recent_post">

        <div class="unicard-header bd-b">
          <h4 class="fw-bold case-u unicard-title">Recent <span class="fg-primary">in your area</span></h4>
        </div>
        <ul style="margin-top: 5px;" class="unimedia-list post-list-sm hidden">
          <!-- 7x -->


        </ul>
        <style>
          .loading-overlay{
            width: 100%;
            min-height: 300px;
            text-align: center;
            padding-top: 100px;
          }
        </style>
        <div class="loading-overlay">
          <i class="fa fa-circle-o-notch fa-spin" style="font-size: 3em;"></i>
        </div>
        <div class="errors hidden" style="text-align: center;padding-top: 100px;padding-bottom: 100px;">
        </div>

      </div>
      <!--/unicard -->

    </div>
    <!-- /Side Col -->

    </div>
    <!-- /Row -->

</div>



