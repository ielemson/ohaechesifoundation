<div class="topbar d-none d-lg-block">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-12 col-lg-6">
             <div class="topbar__list-wrapper">
                <ul class="topbar__list">
                   <li><a href="mailto:{{$setting->email}}"><i
                      class="fa-regular fa-envelope"></i>{{$setting->email}}</a>
                   </li>
                   <li><a href="tel:{{$setting->phone}}"><i class="fa-solid fa-phone"></i>{{$setting->phone}}</a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-12 col-lg-6">
             <div class="topbar__items justify-content-end">
                <div class="select-country">
                   <select name="country" class="country-select select">
                      <option data-flag="fi-gb-eng">English</option>
                   </select>
                </div>
                {{-- <div class="select-currency">
                   <select name="currency" class="currency-select select">
                      <option value="usd">USD</option>
                      <option value="gbp">GBP</option>
                      <option value="aud">AUD</option>
                      <option value="euro">Euro</option>
                   </select>
                </div> --}}
                <div class="social">
                   <a href="{{$setting->facebook}}" target="_blank" aria-label="share us on facebook"
                      title="facebook">
                   <i class="fa-brands fa-facebook-f"></i>
                   </a>
                   <a href="{{$setting->twitter}}" target="_blank" aria-label="share us on twitter"
                      title="twitter">
                   <i class="fa-brands fa-twitter"></i>
                   </a>
                   <a href="{{$setting->instagram}}" target="_blank" aria-label="share us on instagram"
                      title="instagram">
                   <i class="fa-brands fa-instagram"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>