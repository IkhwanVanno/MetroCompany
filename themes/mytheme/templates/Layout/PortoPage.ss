<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$Title - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">$SiteConfig.Title</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#intro">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificate">Certificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <!-- Section Intro -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="intro">
        <div class="text-center text-md-start">
            <h1 class="display-3 fw-bold">
                Hello,<br />
                I am $YourName<br />
                $Profession
            </h1>
        </div>
    </section>
    
    <!-- Section About -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="about">
        <div class="container-fluid">
            <div class="row w-100 align-items-center mb-5">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <% if $ProfileImage %>
                        <img src="$ProfileImage.URL" alt="Profile Photo" class="img-fluid border border-2 w-100 rounded" style="height: 300px; object-fit: cover" />
                    <% else %>
                        <img src="https://via.placeholder.com/300x300" alt="Profile Photo" class="img-fluid border border-2 w-100 rounded" style="height: 300px; object-fit: cover" />
                    <% end_if %>
                </div>
                <div class="col-12 col-md-8">
                    <h1 class="display-4 fw-bold mb-4">
                        About Me <br />
                        $YourName
                    </h1>
                    <p class="lead">
                        $AboutDescription
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Education History</h5>
                    <ul class="list-unstyled">
                        <% loop $EducationalHistories %>
                            <li class="mb-2">• $EHList</li>
                        <% end_loop %>
                        <% if not $EducationalHistories %>
                            <li class="mb-2">• No education history added yet</li>
                        <% end_if %>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Experience & Achievements</h5>
                    <ul class="list-unstyled">
                        <% loop $ExperienceAchievements %>
                            <li class="mb-2">• $EAList</li>
                        <% end_loop %>
                        <% if not $ExperienceAchievements %>
                            <li class="mb-2">• No achievements added yet</li>
                        <% end_if %>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Skills & Technologies</h5>
                    <ul class="list-unstyled">
                        <% loop $SkillsTechnologies %>
                            <li class="mb-2">• $STList</li>
                        <% end_loop %>
                        <% if not $SkillsTechnologies %>
                            <li class="mb-2">• No skills added yet</li>
                        <% end_if %>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Experience -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="experience">
        <div class="container-fluid">
            <div class="text-center text-md-start mb-5">
                <h5 class="text-muted mb-2">My Experience</h5>
                <h1 class="display-4 fw-bold">This is an experience I've had</h1>
            </div>

            <% loop $Experiences %>
                <div class="row align-items-center mb-5">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <% if $ExperienceImage %>
                            <img src="$ExperienceImage.URL" alt="$ETitle" class="img-fluid rounded shadow" />
                        <% else %>
                            <img src="https://via.placeholder.com/600x400" alt="$ETitle" class="img-fluid rounded shadow" />
                        <% end_if %>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">$ETitle</h3>
                        <p class="lead">$EDescription</p>
                    </div>
                </div>
            <% end_loop %>
            
            <% if not $Experiences %>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <img src="https://via.placeholder.com/600x400" alt="No Experience" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">No Experience Added</h3>
                        <p class="lead">Please add your experiences through the CMS admin panel.</p>
                    </div>
                </div>
            <% end_if %>
        </div>
    </section>

    <!-- Section Recent Work -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="work">
        <div class="container-fluid">
            <div class="text-center text-md-start mb-5">
                <h5 class="text-muted mb-2">Recent Work</h5>
                <h1 class="display-4 fw-bold">
                    Feel free to check out these are some of the projects I have completed
                </h1>
            </div>

            <% loop $RecentWorks %>
                <div class="row align-items-center mb-5">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <% if $WorkImage %>
                            <img src="$WorkImage.URL" alt="$RWTitle" class="img-fluid rounded shadow" />
                        <% else %>
                            <img src="https://via.placeholder.com/600x400" alt="$RWTitle" class="img-fluid rounded shadow" />
                        <% end_if %>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">$RWTitle</h3>
                        <p class="lead mb-4">$RWDescription</p>
                        <% if $WorkLink %>
                            <a href="$WorkLink" class="btn btn-primary btn-lg" target="_blank">View Project ></a>
                        <% end_if %>
                    </div>
                </div>
            <% end_loop %>
            
            <% if not $RecentWorks %>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <img src="https://via.placeholder.com/600x400" alt="No Recent Work" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">No Recent Work Added</h3>
                        <p class="lead mb-4">Please add your recent work through the CMS admin panel.</p>
                    </div>
                </div>
            <% end_if %>
        </div>
    </section>

    <!-- Section Certificate -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="certificate">
        <div class="container-fluid">
            <div class="text-center text-md-start mb-5">
                <h5 class="text-muted mb-2">My Certificate</h5>
                <h1 class="display-4 fw-bold">
                    These are the certificates I received during my journey of learning to be a developer
                </h1>
            </div>

            <% loop $Certificates %>
                <div class="row align-items-center mb-5">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <% if $CertificateImage %>
                            <img src="$CertificateImage.URL" alt="$CTitle" class="img-fluid rounded shadow" />
                        <% else %>
                            <img src="https://via.placeholder.com/600x400" alt="$CTitle" class="img-fluid rounded shadow" />
                        <% end_if %>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">$CTitle</h3>
                        <p class="lead">$CDescription</p>
                    </div>
                </div>
            <% end_loop %>
            
            <% if not $Certificates %>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <img src="https://via.placeholder.com/600x400" alt="No Certificate" class="img-fluid rounded shadow" />
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="fw-bold mb-3">No Certificates Added</h3>
                        <p class="lead">Please add your certificates through the CMS admin panel.</p>
                    </div>
                </div>
            <% end_if %>
        </div>
    </section>

    <!-- Section Gallery -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="gallery">
        <div class="container-fluid">
            <div class="mb-5">
                <h5 class="text-muted mb-2">My Gallery</h5>
                <h1 class="display-4 fw-bold">
                    This gallery shows the activities I've been doing,<br />
                    please feel free to check it out
                </h1>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-3 g-md-4">
                <% loop $GalleryImages %>
                    <div class="col-6 col-md-4 col-lg-3">
                        <% if $GalleryImage %>
                            <img src="$GalleryImage.URL" alt="Gallery Image" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                        <% else %>
                            <img src="https://via.placeholder.com/300x200" alt="Gallery Image" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                        <% end_if %>
                    </div>
                <% end_loop %>
                
                <% if not $GalleryImages %>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="https://via.placeholder.com/300x200" alt="Gallery Placeholder" class="img-fluid rounded shadow w-100" style="height: 200px; object-fit: cover" />
                    </div>
                <% end_if %>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="d-flex align-items-center justify-content-center min-vh-100 px-3 px-md-5" id="contact">
        <div class="container-fluid">
            <div class="text-center text-md-start mb-5">
                <h5 class="text-muted mb-2">My Contact</h5>
                <h1 class="display-4 fw-bold">
                    <% if $Contacts.First %>
                        $Contacts.First.ContactTitle
                    <% else %>
                        If you would like to hire me, please contact me using the information below
                    <% end_if %>
                </h1>
            </div>

            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="d-flex flex-column flex-md-row align-items-start">
                        <h5 class="fw-bold me-3 mb-2 mb-md-0">Contact:</h5>
                        <div>
                            <% if $Contacts.First %>
                                $Contacts.First.ContactDescription
                            <% else %>
                                <p class="mb-2">📧 $Email</p>
                                <p class="mb-2">📱 $Phone</p>
                                <p class="mb-2">📍 $Location</p>
                                <p class="mb-0">🌐 $Website</p>
                            <% end_if %>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>