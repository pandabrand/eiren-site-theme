<footer class="content-info footer fixed-bottom">
  <div class="container">
    <div class="row justify-content-between">
      <div class="copyright-info">
        &copy;{{ date( 'Y' ) }} Eiren Caffall
      </div>
      <div class="social-list-block">
        <ul class="social-list d-flex">
          <li class="social-list-item">
            <a href="https://eirencaffall.bandcamp.com" target="_blank" class="social-list-item-link" rel="external">
              <i class="fa fa-bandcamp"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="https://www.instagram.com/eirencaffall/" target="_blank" class="social-list-item-link" rel="external">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="https://twitter.com/eirencaffall" target="_blank" class="social-list-item-link" rel="external">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="social-list-item">
            <a href="https://www.facebook.com/Eiren-Caffall-157675377624681/" target="_blank" class="social-list-item-link" rel="external">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
        </ul>
      </div>
      @php(dynamic_sidebar('sidebar-footer'))
    </div>
  </div>
</footer>
