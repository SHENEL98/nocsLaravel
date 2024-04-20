<div class="site-header">
  <div class="container-fullwide site-header-top">
    <div class="d-flex align-items-center tm-has-textarea">
      <div class="site-logo">
        <span class="site-title-text"><a href="/" rel="home">NOCS</a></span>
      </div>
      <nav id="site-navigation" class="main-navigation">
        <div class="menu-main-menu-container">
          <ul id="primary-menu" class="menu">
            <li id="menu-item-2529" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2220 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-2529">
              <a href="/" aria-current="page">Home</a>
            </li>
            <li id="menu-item-2530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2530">
              <a href="/Events">Events</a>
              <ul class="sub-menu">
                <li id="menu-item-4476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4476">
                  <a href="/7QUESTS">7 QUESTS</a>
                </li>
                <li id="menu-item-4477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4477">
                  <a href="/HaloNight">Halo Night</a>
                </li>
              </ul>
            </li>
            <li id="menu-item-2530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2530">
              <a href="/AboutUs">About Us</a>
            </li>
            <li id="menu-item-2550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2550">
              <a href="/Orientation">Orientation</a>
            </li>
            <li id="menu-item-3017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3017">
              <a href="/ContactUs">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>

      <div id="site-navigation-mobile"></div>
    </div>
  </div>
  <div class="scrolling-banners">
  <div class="scrolling-banner">
    <p>See you all on <strong> April 25</strong> !</p>
  </div>
  <div class="scrolling-banner">
    <p>See you all on <strong> April 25</strong> !</p>
  </div>
  <div class="scrolling-banner">
    <p>See you all on <strong> April 25</strong> !</p>
  </div>
</div>

</div>

<style>
  .scrolling-banners {
    position: relative;
    overflow: hidden;
    width: 100%;
    background-color: #333;
    color: white;
    padding: 10px;
    white-space: nowrap;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .scrolling-banner {
    flex: 1;
    text-align: center;
    animation: scrollText 10s linear infinite;
  }

  @keyframes scrollText {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  .scrolling-banner p {
    margin: 0;
  }
</style>