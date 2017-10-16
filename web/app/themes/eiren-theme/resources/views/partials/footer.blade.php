<footer class="content-info footer fixed-bottom">
  <div class="container">
    <div class="row justify-content-between">
      <div class="copyright-info">
        &copy;{{ date( 'Y' ) }} Eiren Caffall
      </div>
      <div class="social-list-block">
        <ul class="social-list d-flex">
          <li class="social-list-item">
            <a href="#" class="social-list-item-link" rel="external">
              <i class="fa fa-bandcamp"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="#" class="social-list-item-link" rel="external">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="#" class="social-list-item-link" rel="external">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="#" class="social-list-item-link" rel="external">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </div>
</footer>
