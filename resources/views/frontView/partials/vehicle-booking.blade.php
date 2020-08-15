<div class="card">

    <header class="card-header">
        <div class="pull-right">
            <!-- ngIf: lightframe.isLightframe() || backUrl --><div class="ben-flyout-wrap" ng-if="lightframe.isLightframe() || backUrl">
                <button class="btn btn-outline-secondary" type="button" ng-toggle="leaveFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" ng-mx-click="click-leave-flyout" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-x" class="icon-x" width="14" height="14" viewBox="0 0 14 14" ng-svg="icon-x">
                        <polygon points="14 1.75 12.25 0 7 5.25 1.75 0 0 1.75 5.25 7 0 12.25 1.75 14 7 8.75 12.25 14 14 12.25 8.75 7 14 1.75"></polygon>
                    </svg>
                    <span class="visually-hidden">Close</span>
                </button>
            </div>
        </div>
        <ul class="pull-left">
            <button class="btn btn-outline-info" type="button" ng-toggle="secureFlyout" ng-toggle-group="ben-flyouts" ng-toggle-group-closeable="" ng-toggle-auto-close="" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" id="icon-svg-lock" class="icon-svg-lock" width="11" height="14" viewBox="0 0 11.02 14" ng-svg="icon-svg-lock">
                    <path d="M7.66,3.88a2.15,2.15,0,0,0-4.3,0v2h4.3Z" style="fill:none"></path><path d="M9.39,5.85v-2a3.88,3.88,0,0,0-7.76,0v2A1.72,1.72,0,0,0,0,7.56v4.73A1.72,1.72,0,0,0,1.71,14h7.6A1.72,1.72,0,0,0,11,12.29V7.56A1.71,1.71,0,0,0,9.39,5.85Zm-6-2a2.15,2.15,0,0,1,4.3,0v2H3.36Z"></path>
                </svg>
                Secured
            </button>
        </ul>
    </header>
    <main class="card-body booking">
        <div class="container-full" style="margin: -18px -18px 0px -18px !important;">
            <div class="tr" style="margin: 0px -18px -18px 0px -18px !important;">
                <div class="banner text-white" style="background-image: url({{url($vehicle->feature_image??'/no-image.png')}});background-size: cover; background-position-y: center;">
                    <h1>{{$vehicle->name}}</h1>
                    <p >Starting at $249 | 4 or 24 Hour Rental Optionssss</p>
                </div>
            </div>
        </div>
        <br>
        @if(sizeof($schedules))

            <div class="container-fluid">
                <div id="calendar"></div>

            </div>
        @else
            <div class="error-error" style="padding: 100px 10px;">
                <h2>Sorry, there is no online availability for this booking.</h2>
                <div>Please call us at {{setting()->phone}}.</div>
            </div>
        @endif

        <!--<div class="error-error" style="padding: 100px 10px;">
            <h2>Not found</h2>
            <div>
                Sorry about that. You may have followed a bad or outdated link. If you need help, please <a ng-href="https://fareharbor.com/help/submit/" ng-outbound-link="_blank" target="_blank" href="https://fareharbor.com/help/submit/">contact Support</a>.
            </div>
        </div>-->
    </main>
</div>
