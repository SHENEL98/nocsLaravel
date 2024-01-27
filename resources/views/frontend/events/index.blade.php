@extends('temp_layouts/template')

@section('content')
@include('frontend/index/assets')
<div id="content" class="site-content">
          <div class="ttm-business-page-title d-flex align-items-center">
            <div class="ttm-business-page-title-layer"></div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="page-title">Events</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row site-content-inner">
              <div
                id="primary"
                class="content-area col-sm-12 col-md-12 col-lg-12 col-xl-12"
              >
                <main id="main" class="site-main">

                  <article
                    class="post-974 post type-post status-publish format-standard has-post-thumbnail hentry category-marketing"
                  >
                    <div class="ttm-business-blog-classic">
                      <a
                        class="post-thumbnail"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          src="{{asset('assets/src/event_2/0.jpg')}}"
                          class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                          alt="Event 1"
                          decoding="async"
                          fetchpriority="high"
                          
                          sizes="(max-width: 1200px) 100vw, 1200px"
                        />
                      </a>

                      <div class="ttm-business-blog-content">
                        <header class="entry-header">
                          <h2 class="entry-title">
                            <a
                              href=""
                              rel="bookmark"
                              >Halo Night</a
                            >
                          </h2>
                          <div class="entry-meta-footer">
                            <div class="entry-meta-container ">
                              <span class="author vcard prt-meta-line">
                                <i class="fa-regular fa-calendar"></i>
                                  25/09/2023
                              </span>
                              <span class="categories-list prt-meta-line elementor-widget-icon-box">
                                <i
                                aria-hidden="true"
                                class="fas fa-map-marked-alt"
                              ></i>
                              </span>
                            </div>
                          </div>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-header">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in vcontary to popularsoluptate
                          </p>
                          <div class="prt-blogbox-footer">
                            <a
                              href="event_2.html"
                              >Read More</a
                            >
                          </div>
                          <div class="clear clr"></div>
                        </div>
                        <!-- .entry-content -->
                      </div>
                    </div>
                  </article>

                  <article
                    class="post-904 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized"
                  >
                    <div class="ttm-business-blog-classic">
                      <a
                        class="post-thumbnail"
                        href="2023/05/06/getting-ai-to-reason-using-neuro-symbolic-questionanswering-for-immigration/index.html"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <img
                          
                          src="{{asset('assets/src/event_1/1.jpg')}}"
                          class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                          alt="If the white whale be raised it must be in a month."
                          decoding="async"
                          sizes="(max-width: 1200px) 100vw, 1200px"
                        />
                      </a>

                      <div class="ttm-business-blog-content">
                        <header class="entry-header">
                          <h2 class="entry-title">
                            <a
                              href="2023/05/06/getting-ai-to-reason-using-neuro-symbolic-questionanswering-for-immigration/index.html"
                              rel="bookmark"
                              >7 QUESTS.</a
                            >
                          </h2>
                          <div class="entry-meta-footer">
                            <div class="entry-meta-container">
                              <span class="author vcard prt-meta-line">
                                <i class="fa-regular fa-user"></i>
                                <a
                                  class="url fn n"
                                  href="author/admin/index.html"
                                >
                                  admin
                                </a>
                              </span>
                              <span class="categories-list prt-meta-line">
                                <i class="far fa-folder-open"></i>
                                <a
                                  href="category/uncategorized/index.html"
                                  rel="category tag"
                                  >Uncategorized</a
                                >
                              </span>
                              <span class="meta-comment prt-meta-line">
                                <i class="far fa-comment"></i>
                                <a
                                  href="2023/05/06/getting-ai-to-reason-using-neuro-symbolic-questionanswering-for-immigration/index.html#respond"
                                  ><span class="comment-count">0</span>
                                  <span class="comment-count-label"
                                    >comments</span
                                  ></a
                                >
                              </span>
                            </div>
                          </div>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-header">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in vcontary to popularsoluptate
                          </p>
                          <div class="prt-blogbox-footer">
                            <a
                              href="2023/05/06/getting-ai-to-reason-using-neuro-symbolic-questionanswering-for-immigration/index.html"
                              >Read More</a
                            >
                          </div>
                          <div class="clear clr"></div>
                        </div>
                        <!-- .entry-content -->
                      </div>
                    </div>
                  </article>

                  
                </main>
                <!-- .site-main -->
              </div>
              <!-- .content-area -->

            
              <!-- #secondary -->
            </div>
          </div>
        </div>

@endsection