<x-app title="Login">
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
    <form>
        <div class="mx-auto" style="width: 110px;">
            <img class="mb-4 " src="/storage/images/assets/Logo.png" alt="" width="100">
        </div>
        <div class="mx-auto" style="width: 150px;">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        </div>

        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    
    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
    <p style="text-align: center" class="mt-3 mb-3 text-body-secondary">
        Don't have an account? <a href="\signup">Sign up</a>
    </p>
    <p class="mt-5 mb-3 text-body-secondary">© 2024 - The day I fucking die</p>
  </form>
</main>
</body>
</html>