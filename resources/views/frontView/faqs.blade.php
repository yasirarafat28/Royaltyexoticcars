@extends('layouts.front')
@section('content')
  <div class="main">
    <div class="faqs__container">
      <h1 class="faqs__h1">Frequently Asked Questions</h1>
      <article class="faqs__article">
        <div class="card card__faq">
          <h2 class="faqs__h2">How does it work?</h2>
          <div class="faqs__richtext w-richtext">
            <p>Pick a car, pay for the rental, show proof of insurance and enjoy.</p>
          </div>
        </div>
        <div class="card__shadow"></div>
      </article>
      <div class="w-dyn-list">
        <div role="list" class="w-dyn-items">
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/how-many-miles-do-i-get-with-my-rental.html"
              class="faqs__link w-inline-block">
              <div>How many miles do I get with my rental?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-any-security-deposits.html"
              class="faqs__link w-inline-block">
              <div>Are there any security deposits?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/what-is-the-refund-policy.html"
              class="faqs__link w-inline-block">
              <div>What is the refund policy?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/is-there-a-military-discount.html"
              class="faqs__link w-inline-block">
              <div>Is there a military discount?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/does-your-website-support-older-browsers.html"
              class="faqs__link w-inline-block">
              <div>Does your website support older browsers?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/why-do-the-brakes-squeak.html"
              class="faqs__link w-inline-block">
              <div>Why do the brakes squeak?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-you-accept-bitcoin-or-other-altcoins.html"
              class="faqs__link w-inline-block">
              <div>Do you accept Bitcoin or other altcoins*?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-any-taxes.html"
              class="faqs__link w-inline-block">
              <div>Are there any taxes?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-any-guarantees.html"
              class="faqs__link w-inline-block">
              <div>Are there any guarantees?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-you-match-competitor-prices.html"
              class="faqs__link w-inline-block">
              <div>Do you match competitor prices?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/how-old-do-i-have-to-be-to-rent-a-car.html"
              class="faqs__link w-inline-block">
              <div>How old do I have to be to rent a car?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/can-i-book-a-car-for-someone-else.html"
              class="faqs__link w-inline-block">
              <div>Can I book a car for someone else?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-penalties-for-late-returns.html"
              class="faqs__link w-inline-block">
              <div>Are there penalties for late returns?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-you-accept-walk-ins.html"
              class="faqs__link w-inline-block">
              <div>Do you accept walk-ins?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-any-group-discounts.html"
              class="faqs__link w-inline-block">
              <div>Are there any group discounts?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a
              href="faqs/do-you-accept-prepaid-debit-cards-gift-cards.html" class="faqs__link w-inline-block">
              <div>Do you accept prepaid debit cards/gift cards?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-you-sell-gift-cards.html"
              class="faqs__link w-inline-block">
              <div>Do you sell gift cards?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/can-i-book-car-rentals-online.html"
              class="faqs__link w-inline-block">
              <div>Can I book car rentals online?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-i-have-to-have-a-drivers-license.html"
              class="faqs__link w-inline-block">
              <div>Do I have to have a drivers license?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a
              href="faqs/are-there-any-speed-restrictions-or-governors.html" class="faqs__link w-inline-block">
              <div>Are there any speed restrictions or governors?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/do-i-need-to-arrive-early-for-pickup.html"
              class="faqs__link w-inline-block">
              <div>Do I need to arrive early for pickup?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-there-hourly-rentals.html"
              class="faqs__link w-inline-block">
              <div>Are there hourly rentals?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/can-i-pay-with-cash.html"
              class="faqs__link w-inline-block">
              <div>Can I pay with cash?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/how-much-does-it-cost-to-rent-a-car.html"
              class="faqs__link w-inline-block">
              <div>How much does it cost to rent a car?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a
              href="faqs/can-tall-people-fit-comfortably-in-an-exotic-car.html" class="faqs__link w-inline-block">
              <div>Can tall people fit comfortably in an exotic car?</div>
              <div>      →</div>
            </a></div>
          <div role="listitem" class="faqs__row w-dyn-item"><a href="faqs/are-background-checks-required.html"
              class="faqs__link w-inline-block">
              <div>Are background checks required?</div>
              <div>      →</div>
            </a></div>
        </div>
      </div>
    </div>
  </div>
  @endsection