<?php include ("header.php")?>

<!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="<?php echo base_url();?>assets/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Group Promo</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Group Promo</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area">
            <div class="row">
              <div class="col-md-15">
                <div class="aa-blog-content">
                  <div class="row">
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">   <?php foreach($promo as $img){?>                     
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="<?php echo site_url('Promodetail/index/'.$img->ID_IMG_PROMO); ?>"><img src="<?php echo base_url();?>assets/img/promo/<?php echo $img->IMAGE1;?>" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                          <?php ;} ?>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/2.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/3.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/2.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/3.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/2.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <article class="aa-blog-content-single">                        
                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                        <figure class="aa-blog-img">
                          <a href="#"><img src="<?php echo base_url();?>assets/img/fashion/1.jpg" alt="fashion img"></a>
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptatum accusamus dolorum ipsam adipisci laudantium laborum ipsa excepturi soluta, dolore similique, velit id, rerum repudiandae enim modi! Quo, debitis, in.</p>
                        <div class="aa-article-bottom">
                          <div class="aa-post-author">
                            Posted By <a href="#">Jackson</a>
                          </div>
                          <div class="aa-post-date">
                            March 26th 2016
                          </div>
                        </div>
                      </article>
                    </div>

                  </div>
                </div>
                <!-- Blog Pagination -->
                <div class="aa-blog-archive-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a aria-label="Previous" href="#">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a aria-label="Next" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->

<?php include ("footer.php");?>