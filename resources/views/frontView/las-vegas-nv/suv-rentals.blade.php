@extends('layouts.front')
@section('content')
  <div class="main">
    <div class="container">
      <div class="crumbsbar w-clearfix">
        <div class="crumbsbar__wrapper">
          <div data-delay="200" data-hover="1" class="crumbsbar__dropdown w-dropdown">
            <div class="crumbsbar__toggle w-dropdown-toggle">
              <div>Las Vegas, NV</div><img
                src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
                alt="" class="crumbsbar__icon" />
            </div>
            <nav class="crumbsbar__pane w-dropdown-list">
              <div class="crumbsbar__list"><a href="car-rentals.html"
                  class="crumbsbar__link crumbsbar__link--inline w-inline-block">
                  <div>Las Vegas, NV</div>
                </a></div>
            </nav>
          </div><img
            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f52c6915f44000178c85e_right arrow.svg"
            alt="" class="crumbsbar__divider" />
          <div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
            <div class="crumbsbar__toggle w-dropdown-toggle">
              <div>SUV</div>
              <div>s</div><img
                src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
                alt="" class="crumbsbar__icon" />
            </div>
            <nav class="crumbsbar__pane w-dropdown-list">
              <div class="crumbsbar__list">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="car-rentals.html"
                        class="crumbsbar__link w-dropdown-link">Cars</a></div>
                    <div role="listitem" class="w-dyn-item"><a href="autocycle-rentals.html"
                        class="crumbsbar__link w-dropdown-link">Autocycle</a></div>
                    <div role="listitem" class="w-dyn-item"><a href="motorcycle-rentals.html"
                        class="crumbsbar__link w-dropdown-link">Motorcycles</a></div>
                  </div>
                </div>
              </div>
            </nav>
          </div><img
            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f52c6915f44000178c85e_right arrow.svg"
            alt="" class="crumbsbar__divider" />
          <div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
            <div class="crumbsbar__toggle w-dropdown-toggle">
              <div>All </div>
              <div>SUVs</div><img
                src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
                alt="" class="crumbsbar__icon" />
            </div>
            <nav class="crumbsbar__pane w-dropdown-list">
              <div class="crumbsbar__list">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="offroad-suv-rentals.html"
                        class="crumbsbar__link w-dropdown-link">Offroad SUVs</a></div>
                  </div>
                </div>
              </div>
            </nav>
          </div><img
            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a5f52c6915f44000178c85e_right arrow.svg"
            alt="" class="crumbsbar__divider" />
          <div data-delay="0" data-hover="1" class="crumbsbar__dropdown w-dropdown">
            <div class="crumbsbar__toggle w-dropdown-toggle">
              <div class="w-condition-invisible">SUVs</div>
              <div>All Brands</div><img
                src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5a7e2fc2432d430001146dc7_icon-arrow-down-black.svg"
                alt="" class="crumbsbar__icon" />
            </div>
            <nav class="crumbsbar__pane w-dropdown-list">
              <div class="crumbsbar__list">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="jeep-rentals.html"
                        class="crumbsbar__link w-dropdown-link">Jeep</a></div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="browse">
        <div class="browse__nav">
          <div class="browse__heading">
            <div class="browse__heading--embed w-embed">
              <h1 class="browse__h1">SUV Rentals</h1>
            </div>
            <div class="browse__heading--embed w-condition-invisible w-embed">
              <h1 class="browse__h1"> Rentals</h1>
            </div>
            <div class="browse__heading--embed w-condition-invisible w-embed">
              <h1 class="browse__h1"> Rentals</h1>
            </div>
            <div class="browse__heading--embed w-condition-invisible w-embed">
              <h1 class="browse__h1"> Rentals</h1>
            </div>
            <p class="browse__desc">From fully custom off-road vehicles to luxury suvs – our selection of suv rentals
              are fully loaded and ready for adventure!</p>
            <p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
            <p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
            <p class="browse__desc w-condition-invisible w-dyn-bind-empty"></p>
          </div>
          <div class="quicklinks quicklinks__browse w-dyn-list">
            <div role="list" class="w-dyn-items">
              <div role="listitem" class="w-dyn-item"><a href="jeep-rentals.html"
                  class="quicklinks__link w-inline-block"><img
                    src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86280cba0c49000107fcb4_brand-jeep-light-bg.svg"
                    alt="Jeep" class="quicklinks__logo" />
                  <div class="quicklinks__details">
                    <div>Jeep</div>
                    <div class="quicklinks__desc">Wrangler</div>
                  </div>
                </a></div>
            </div>
          </div>
        </div>
        <div class="browse__pane">
          <div class="w-dyn-list">
            <div class="cards__list--empty w-dyn-empty"></div>
          </div>
          <div class="w-dyn-list">
            <div role="list" class="rent__list w-dyn-items">
              <div role="listitem" class="rent__item w-dyn-item"><a
                  href="../suv-rentals/2018-jeep-wrangler-white-upgraded.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86280cba0c49000107fcb4_brand-jeep-light-bg.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="2018-jeep-wrangler-white-upgraded">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="2018-jeep-wrangler-white-upgraded" data-reach-trending-hide></div>4WD
                      (4x4)
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5aa9b03b01bb9a35c9646980_2018-jeep-wrangler-white-exterior-front-angle-royalty-exotic-cars.jpg"
                        alt="" class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5aa9b028d568d6f7399a09cd_2018-jeep-wrangler-white-exterior-back-angle-royalty-exotic-cars.jpg"
                        alt="" class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5aa9b042d568d643a79a09db_2018-jeep-wrangler-white-exterior-profile-royalty-exotic-cars.jpg"
                        alt="" class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Jeep Wrangler</div>
                      <div>4 Hrs: $</div>
                      <div>349</div>
                      <div>    |    8 Hrs: $</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">799</div>
                      </div>
                    </div>
                  </div>
                </a></div>
              <div role="listitem" class="rent__item w-dyn-item"><a
                  href="../suv-rentals/2018-jeep-wrangler-red-upgraded.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86280cba0c49000107fcb4_brand-jeep-light-bg.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="2018-jeep-wrangler-red-upgraded">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="2018-jeep-wrangler-red-upgraded" data-reach-trending-hide></div>4WD
                      (4x4)
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5b3a4c79c0be082a8e15acf0__0014_SPD06704.jpg" alt="" class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5b3a4ca352b2dc32fd1bb9e0__0018_SPD06684b.jpg" alt=""
                        class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5b3a4c5fb496c519c870c4ab__0011_SPD06745.jpg" alt=""
                        class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Jeep Wrangler</div>
                      <div>4 Hrs: $</div>
                      <div>349</div>
                      <div>    |    8 Hrs: $</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">799</div>
                      </div>
                    </div>
                  </div>
                </a></div>
              <div role="listitem" class="rent__item w-dyn-item"><a href="../suv-rentals/lamborghini-urus.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a10aaa4d85f4b0001a53e76_Lambo-web.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="lamborghini-urus">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="lamborghini-urus" data-reach-trending-hide></div>All Wheel Drive
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e18c08a1b4704641fdece38_Exterior%20(%20Front%20Angle%20).jpg" alt=""
                        class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e18c077d3815c7ee2cc2e8e_Exterior%20(%20Rear%20Angle%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5e18c09e0d00d9cee2262d07_Exterior%20(%20Side%20Profile%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Lamborghini Urus </div>
                      <div>4 Hrs: $</div>
                      <div>699</div>
                      <div>    |    8 Hrs: $</div>
                      <div>1199</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>1199</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">1499</div>
                      </div>
                    </div>
                  </div>
                </a></div>
              <div role="listitem" class="rent__item w-dyn-item"><a href="../suv-rentals/mercedes-g550.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a873a0257c38e00015b5e92_brand-amg-light-bg.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="mercedes-g550">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="mercedes-g550" data-reach-trending-hide></div>All Wheel Drive
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e18bf94d9e0a547bf5af71c_Exterior%20(%20Front%20Quarter%20).jpg" alt=""
                        class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e18bf85a9c7eb7a7635dd6e_Exterior%20(%20Rear%20Quarter%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5e18bfa00d00d976e7251e7f_Exterior%20(%20Side%20Profile%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Mercedes G550</div>
                      <div>4 Hrs: $</div>
                      <div>499</div>
                      <div>    |    8 Hrs: $</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>499</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">799</div>
                      </div>
                    </div>
                  </div>
                </a></div>
              <div role="listitem" class="rent__item w-dyn-item"><a href="../suv-rentals/ford-raptor.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5e545206ad46c93ea33479a1_brand-ford.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="ford-raptor">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="ford-raptor" data-reach-trending-hide></div>All Wheel Drive
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e272c42e721dd24daf84540_Exterior%20(%20Front%20Quarter%20).jpg" alt=""
                        class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e272c3992320b318693444b_Exterior%20(%20Rear%20quarter%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5e272c4ee721dd1426f8495d_Exterior%20(%20Side%20Profile%20).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Ford Raptor </div>
                      <div>4 Hrs: $</div>
                      <div class="w-dyn-bind-empty"></div>
                      <div>    |    8 Hrs: $</div>
                      <div>299</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>299</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">499</div>
                      </div>
                    </div>
                  </div>
                </a></div>
              <div role="listitem" class="rent__item w-dyn-item"><a href="../suv-rentals/range-rover-supercharged.html"
                  class="rentals__link rentals__link--3x3 w-inline-block">
                  <div class="rentals__header"><img
                      src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53297/5a86288f5e69d200011ed8c0_brand-range-rover.svg"
                      alt="" class="rentals__logo" />
                    <div class="trending__embed w-embed">
                      <div class="trending" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="range-rover-supercharged">
                        <div class="trending__wrapper">
                          <img
                            src="https://assets-global.website-files.com/5a10aaa4d85f4b0001a53292/5e540b14d9116b23f42894dd_fire-alt-duotone-red.svg"
                            data-w-id="7ae20523-12ff-5857-2440-beb0e0f41110_instance-0"
                            data-wf-id="[&quot;7ae20523-12ff-5857-2440-beb0e0f41110_instance-0&quot;]" alt=""
                            class="trending__icon">
                          <div class="trending__text">Trending Now</div>
                        </div>
                      </div>

                      <div class="rentals__label" data-reach-trending-directory="www.royaltyexoticcars.com/suv-rentals"
                        data-reach-trending-slug="range-rover-supercharged" data-reach-trending-hide></div>All Wheel
                      Drive
                    </div>
                    <div class="rentals__label w-condition-invisible">Unavailable</div>
                  </div>
                  <div class="rentals__photos">
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e4ee01db12387372e1d7714_Exterior%20(%20Front%20Quarter%20).jpg" alt=""
                        class="rentals__photo" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo--wrapper"><img
                        src="/frontEnd/5e4ee00a6ad29a472726d6b9_Exterior%20(%20Rear%20Quarter%20)%20.jpg" alt=""
                        class="rentals__photo rentals__photo--mobile" />
                      <div class="rentals__unavailable w-condition-invisible"></div>
                    </div>
                    <div class="rentals__photo rentals__photo--mobile rentals__thumb--mobile--cta"><img
                        src="/frontEnd/5e4ee02ad1a7a37783fbeab4_Exterior%20(%20Side%20Profile%20)%20(1).jpg" alt=""
                        class="rentals__photo rentals__photo--mobile rentals__photo--blur" />
                      <div class="rentals__photo--overlay"></div>
                    </div>
                    <div class="rentals__photos--spacer"></div>
                  </div>
                  <div class="rentals__footer">
                    <div class="rentals__info">
                      <div class="rentals__title">Range Rover HSE V8</div>
                      <div>4 Hrs: $</div>
                      <div>249</div>
                      <div>    |    8 Hrs: $</div>
                      <div>249</div>
                    </div>
                    <div class="rentals__button">
                      <div class="rentals__button--label">24 Hours</div>
                      <div>$</div>
                      <div>249</div>
                    </div>
                    <div class="rentals__note">
                      <div class="rentals__note--text">*We beat competitor&#x27;s prices</div>
                      <div class="rentals__note--was">
                        <div class="rentals__note--text">normally $</div>
                        <div class="rentals__note--text">449</div>
                      </div>
                    </div>
                  </div>
                </a></div>
            </div>
          </div>
          <div class="w-dyn-list">
            <div class="cards__list--empty w-dyn-empty"></div>
          </div>
          <div class="w-dyn-list">
            <div class="cards__list--empty w-dyn-empty"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection