<x-app title="Login - Pawcare">
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
  </style>

  <div class="d-flex align-items-center py-4 bg-body-tertiary">
    <main style="max-width: 330px; padding: 1rem;" class="content w-100 m-auto">
      <form action="/login" method="post">
        @csrf
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissable fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissable fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="text-center">
            <img class="mb-4" src="/storage/images/assets/Logo.png" alt="" width="100">
        </div>
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <div class="form-check text-start my-3">
          <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        <p style="text-align: center" class="mt-3 mb-3 text-body-secondary">
          Don't have an account?
          <a href="\signup">Sign up</a>
        </p>
        <p class="mt-5 mb-3 text-body-secondary">© 2024 - The day I fucking die</p>
      </form>
    </main>
  </div>
</x-app>
