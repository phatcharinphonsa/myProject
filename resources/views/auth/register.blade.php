@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
  <div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
      <!-- Register Basic -->
      <div class="card mb-0">
        <div class="card-body">
          <a href="#" class="brand-logo">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" zoomAndPan="magnify" viewBox="0 0 224.87999 225" height="60" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="6a7e3ada4a"><path d="M 0 17 L 224.761719 17 L 224.761719 224.9375 L 0 224.9375 Z M 0 17 " clip-rule="nonzero"/></clipPath><clipPath id="d0b013539b"><path d="M 112.441406 242.179688 C 82.421875 242.179688 54.152344 230.496094 32.941406 209.238281 C 11.683594 188.027344 0 159.761719 0 129.742188 C 0 99.722656 11.683594 71.453125 32.941406 50.242188 C 54.152344 28.984375 82.421875 17.300781 112.441406 17.300781 C 142.460938 17.300781 170.726562 28.984375 191.9375 50.242188 C 213.195312 71.5 224.878906 99.722656 224.878906 129.742188 C 224.878906 159.761719 213.195312 188.027344 191.9375 209.238281 C 170.726562 230.496094 142.460938 242.179688 112.441406 242.179688 Z M 112.441406 24.042969 C 84.21875 24.042969 57.65625 35.050781 37.703125 55.003906 C 17.75 74.957031 6.742188 101.519531 6.742188 129.742188 C 6.742188 157.964844 17.75 184.523438 37.703125 204.476562 C 57.65625 224.429688 84.21875 235.441406 112.441406 235.441406 C 140.664062 235.441406 167.222656 224.429688 187.175781 204.476562 C 207.128906 184.523438 218.140625 157.964844 218.140625 129.742188 C 218.140625 101.519531 207.128906 74.957031 187.175781 55.003906 C 167.222656 35.050781 140.664062 24.042969 112.441406 24.042969 Z M 112.441406 24.042969 " clip-rule="nonzero"/></clipPath><clipPath id="d2d632174d"><path d="M 5.402344 24.035156 L 219.816406 24.035156 L 219.816406 224.9375 L 5.402344 224.9375 Z M 5.402344 24.035156 " clip-rule="nonzero"/></clipPath><clipPath id="175d05b357"><path d="M 112.441406 24.035156 C 53.324219 24.035156 5.402344 74.777344 5.402344 137.367188 C 5.402344 199.957031 53.324219 250.699219 112.441406 250.699219 C 171.554688 250.699219 219.476562 199.957031 219.476562 137.367188 C 219.476562 74.777344 171.554688 24.035156 112.441406 24.035156 " clip-rule="nonzero"/></clipPath><clipPath id="922258c289"><path d="M 91.234375 48.464844 L 133.964844 48.464844 L 133.964844 91.191406 L 91.234375 91.191406 Z M 91.234375 48.464844 " clip-rule="nonzero"/></clipPath><clipPath id="2831db8cef"><path d="M 91.023438 98.699219 L 133.640625 98.699219 L 133.640625 194 L 91.023438 194 Z M 91.023438 98.699219 " clip-rule="nonzero"/></clipPath><clipPath id="b1940c88fa"><path d="M 133.640625 173.273438 C 133.640625 184.683594 124.144531 193.933594 112.433594 193.933594 C 100.726562 193.933594 91.230469 184.683594 91.230469 173.273438 L 91.230469 119.359375 C 91.230469 107.949219 100.726562 98.699219 112.433594 98.699219 C 124.144531 98.699219 133.640625 107.949219 133.640625 119.359375 L 133.640625 173.273438 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#6a7e3ada4a)"><g clip-path="url(#d0b013539b)"><path fill="#aba3f5" d="M 0 17.300781 L 224.699219 17.300781 L 224.699219 242 L 0 242 Z M 0 17.300781 " fill-opacity="1" fill-rule="nonzero"/></g></g><g clip-path="url(#d2d632174d)"><g clip-path="url(#175d05b357)"><path fill="#ffffff" d="M 5.402344 24.035156 L 219.816406 24.035156 L 219.816406 251.441406 L 5.402344 251.441406 Z M 5.402344 24.035156 " fill-opacity="1" fill-rule="nonzero"/></g></g><g clip-path="url(#922258c289)"><path fill="#c4bcac" d="M 133.964844 69.828125 C 133.964844 70.527344 133.929688 71.226562 133.859375 71.921875 C 133.792969 72.617188 133.6875 73.308594 133.554688 73.996094 C 133.417969 74.683594 133.246094 75.359375 133.042969 76.03125 C 132.839844 76.699219 132.605469 77.359375 132.335938 78.003906 C 132.070312 78.652344 131.769531 79.28125 131.441406 79.898438 C 131.109375 80.515625 130.75 81.117188 130.363281 81.699219 C 129.972656 82.28125 129.558594 82.839844 129.113281 83.382812 C 128.671875 83.921875 128.199219 84.441406 127.707031 84.933594 C 127.210938 85.429688 126.695312 85.898438 126.152344 86.34375 C 125.613281 86.785156 125.050781 87.203125 124.46875 87.59375 C 123.886719 87.980469 123.289062 88.339844 122.671875 88.667969 C 122.054688 89 121.421875 89.296875 120.773438 89.566406 C 120.128906 89.832031 119.472656 90.070312 118.800781 90.273438 C 118.132812 90.476562 117.453125 90.644531 116.765625 90.78125 C 116.082031 90.917969 115.390625 91.019531 114.695312 91.089844 C 113.996094 91.15625 113.300781 91.191406 112.601562 91.191406 C 111.898438 91.191406 111.203125 91.15625 110.503906 91.089844 C 109.808594 91.019531 109.117188 90.917969 108.433594 90.78125 C 107.746094 90.644531 107.066406 90.476562 106.398438 90.273438 C 105.730469 90.070312 105.070312 89.832031 104.425781 89.566406 C 103.777344 89.296875 103.144531 89 102.527344 88.667969 C 101.910156 88.339844 101.3125 87.980469 100.730469 87.59375 C 100.148438 87.203125 99.585938 86.785156 99.046875 86.34375 C 98.507812 85.898438 97.988281 85.429688 97.492188 84.933594 C 97 84.441406 96.53125 83.921875 96.085938 83.382812 C 95.640625 82.839844 95.226562 82.28125 94.835938 81.699219 C 94.449219 81.117188 94.089844 80.515625 93.757812 79.898438 C 93.429688 79.28125 93.128906 78.652344 92.863281 78.003906 C 92.59375 77.359375 92.359375 76.699219 92.15625 76.03125 C 91.953125 75.359375 91.78125 74.683594 91.648438 73.996094 C 91.511719 73.308594 91.40625 72.617188 91.339844 71.921875 C 91.269531 71.226562 91.234375 70.527344 91.234375 69.828125 C 91.234375 69.128906 91.269531 68.429688 91.339844 67.734375 C 91.40625 67.039062 91.511719 66.347656 91.648438 65.660156 C 91.78125 64.976562 91.953125 64.296875 92.15625 63.628906 C 92.359375 62.957031 92.59375 62.300781 92.863281 61.652344 C 93.128906 61.007812 93.429688 60.375 93.757812 59.757812 C 94.089844 59.140625 94.449219 58.542969 94.835938 57.960938 C 95.226562 57.378906 95.640625 56.816406 96.085938 56.277344 C 96.53125 55.734375 97 55.21875 97.492188 54.722656 C 97.988281 54.226562 98.507812 53.757812 99.046875 53.3125 C 99.585938 52.871094 100.148438 52.453125 100.730469 52.066406 C 101.3125 51.675781 101.910156 51.316406 102.527344 50.988281 C 103.144531 50.65625 103.777344 50.359375 104.425781 50.089844 C 105.070312 49.824219 105.730469 49.589844 106.398438 49.386719 C 107.066406 49.183594 107.746094 49.011719 108.433594 48.875 C 109.117188 48.738281 109.808594 48.636719 110.503906 48.566406 C 111.203125 48.5 111.898438 48.464844 112.601562 48.464844 C 113.300781 48.464844 113.996094 48.5 114.695312 48.566406 C 115.390625 48.636719 116.082031 48.738281 116.765625 48.875 C 117.453125 49.011719 118.132812 49.183594 118.800781 49.386719 C 119.472656 49.589844 120.128906 49.824219 120.773438 50.089844 C 121.421875 50.359375 122.054688 50.65625 122.671875 50.988281 C 123.289062 51.316406 123.886719 51.675781 124.46875 52.066406 C 125.050781 52.453125 125.613281 52.871094 126.152344 53.3125 C 126.695312 53.757812 127.210938 54.226562 127.707031 54.722656 C 128.199219 55.21875 128.671875 55.734375 129.113281 56.277344 C 129.558594 56.816406 129.972656 57.378906 130.363281 57.960938 C 130.75 58.542969 131.109375 59.140625 131.441406 59.757812 C 131.769531 60.375 132.070312 61.007812 132.335938 61.652344 C 132.605469 62.300781 132.839844 62.957031 133.042969 63.628906 C 133.246094 64.296875 133.417969 64.976562 133.554688 65.660156 C 133.6875 66.347656 133.792969 67.039062 133.859375 67.734375 C 133.929688 68.429688 133.964844 69.128906 133.964844 69.828125 Z M 133.964844 69.828125 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#2831db8cef)"><g clip-path="url(#b1940c88fa)"><path fill="#c4bcac" d="M 133.640625 98.699219 L 133.640625 194.257812 L 91.023438 194.257812 L 91.023438 98.699219 Z M 133.640625 98.699219 " fill-opacity="1" fill-rule="nonzero"/></g></g></svg>
            
          </a>

          <h4 class="card-title mb-1">เริ่มต้นด้วยการสร้างบัญชี 🚀</h4>
          <p class="card-text mb-2">กรุณาเข้าสู่ระบบหรือสร้างบัญชีเพื่อเข้าใช้งานระบบของเรา!</p>


          <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-1">
              <label for="register-username" class="form-label">Username</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username"
                name="name" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus
                value="{{ old('name') }}" />
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-1">
              <label for="register-email" class="form-label">อีเมล</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email"
                name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2"
                value="{{ old('email') }}" />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-password" class="form-label">รหัสผ่าน</label>

              <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror"
                  id="register-password" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <label for="register-password-confirm" class="form-label">ยืนยันรหัสผ่าน</label>

              <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="register-password-confirm"
                  name="password_confirmation"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
              <div class="mb-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms" name="terms" tabindex="4" />
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="{{ route('terms.show') }}" target="_blank">terms_of_service</a> and
                    <a href="{{ route('policy.show') }}" target="_blank">privacy_policy</a>
                  </label>
                </div>
              </div>
            @endif
            <button type="submit" class="btn btn-primary w-100" tabindex="5">สมัครสมาชิก</button>
          </form>

          <p class="text-center mt-2">
            <span>เคยสมัครแล้ว?</span>
            @if (Route::has('login'))
              <a href="{{ route('login') }}">
                <span>กรุณาเข้าสู่ระบบ</span>
              </a>
            @endif
          </p>

          <div class="divider my-2">
            <div class="divider-text">หรือ</div>
          </div>

          <div class="auth-footer-btn d-flex justify-content-center">
            <a href="#" class="btn btn-facebook">
              <i data-feather="facebook"></i>
            </a>
            <a href="#" class="btn btn-twitter white">
              <i data-feather="twitter"></i>
            </a>
            <a href="#" class="btn btn-google">
              <i data-feather="mail"></i>
            </a>
            <a href="#" class="btn btn-github">
              <i data-feather="github"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Register basic -->
    </div>
  </div>
@endsection
