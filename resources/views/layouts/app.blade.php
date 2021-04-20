<main id="main" class="py-8 prose main">
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
  <contact-modal
    contact-label = "{{ __("Contact Us","sage") }}"
    question-label = "{{ __("Question about workshops","sage") }}"
    question-email = "{{ $question_email }}"
    question-phone = "{{ $question_phone }}"
    partner-label = "{{ __("Partner with us", "sage") }}"
    partner-email = "{{ $partner_email }}"
    partner-phone = "{{ $partner_phone }}"
    address-label = "{{ __("Address","sage") }} "
    address = "{{ $address }}"
  >
  </contact-modal>
</main>
