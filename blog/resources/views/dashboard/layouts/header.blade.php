<header
class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/blog">Mocha Blog</a>
<button
    class="navbar-toggler position-absolute d-md-none collapsed"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#sidebarMenu"
    aria-controls="sidebarMenu"
    aria-expanded="false"
    aria-label="Toggle navigation"
>
    <span class="navbar-toggler-icon"></span>
</button>
<input
    class="form-control form-control-dark w-100 rounded-0 border-0"
    type="text"
    placeholder="Search"
    aria-label="Search"
/>
<div class="navbar-nav">
    <div class="nav-item text-nowrap">
        <div class="nav-link px-3">
            <form action="/logout" method="POST">
                @csrf
                <li><button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> 
                    Log-Out 
                    <span
                    data-feather="log-out"
                    class="ms-1 align-text-bottom"
                    ></span>
                </button></li>
            </form>
        </div>
    </div>
</div>
</header>