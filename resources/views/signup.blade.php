<x-app title="Sign Up - Pawcare">
      <style>
          @media (max-width: 768px) {
              :root {
                  --docsearch-spacing: 10px;
                  --docsearch-footer-height: 40px;
              }
          }

          body {
              margin: 0;
          }

          .content {
              padding: var(--docsearch-spacing);
          }

          .footer {
              height: var(--docsearch-footer-height);
              background-color: #f1f1f1;
              text-align: center;
              line-height: var(--docsearch-footer-height); /* Center text vertically */
          }

          .top-alert {
              position: fixed;
              top: -100px; /* Initially hide the alert above the viewport */
              left: 50%;
              transform: translateX(-50%);
              z-index: 1050; /* Ensure it is above other content */
              transition: top 0.5s ease-in-out; /* Smooth slide-in animation */
          }

          .top-alert.show {
              top: 20px; /* Position the alert below the top of the viewport */
          }
      </style>
  <div class="d-flex align-items-center py-4 bg-body-tertiary login-bg">
    <main style="max-width: 330px; padding: 1rem;" class="content w-100 m-auto">
      <form action="/signup" method="post">
        @csrf

        <div class="text-center">
            <img class="mb-4" src="/storage/images/assets/Logo.png" alt="" width="100">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>

        <div class="form-floating my-1">
          <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{old('name')}}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating my-1">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating my-1">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating my-1">
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required>
          <label for="password_confirmation">Confirm Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
        <p style="text-align: center" class="mt-3 mb-3 text-body-secondary">
            Already have an account? <a href="/login">Login</a>
        </p>
        <p class="mt-5 mb-3 text-body-secondary">© 2024 - Pawcare</p>
      </form>
    </main>
  </div>
</x-app>
