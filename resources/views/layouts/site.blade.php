@include('front._header')
@include('front.includes._header-mobile')
@include('front.includes._header-top')
@include('front.includes._header-center')
@include('front.includes._header-bottom')
     

              <div id="header-sticky">
                  <div class="container">
                    <div class="row align-items-center justify-content-between">
                      <div class="d-flex align-items-center col-xl-3 col-md-3">
                        <div class="contentstickynew_verticalmenu"></div>
                        <div class="contentstickynew_logo"></div>
                      </div>
                      <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                      <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
                    </div>
                  </div>
              </div>
                        

                    
                      
              <aside id="notifications">
                <div class="container">
                  
                  
                  
                    </div>
              </aside>
                    
   
<div id="wrapper-site">
                                  
  <div id="content-wrapper" class="full-width">
    
  <div id="main">

        @yield('content')


    </div>
  </div>
</div>

      
@include('front.includes._footer')