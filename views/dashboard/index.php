<?php
  $user = $this->d['user'];
  include('views/head.php');
?>
  <body>
<?php 
  include('views/header.php');
  include('views/sidebar.php');
?>

	<!-- Page Content -->
	<div class="bg-primary">
		<div class="container">
			<!-- Hero Section -->
			<div class="row align-items-center no-gutters">
				<div class="col-xl-5 col-lg-6 col-md-12">
					<div class="py-5 py-lg-0">
						<h1 class="text-white display-4 font-weight-bold">Bienvenido a ConectaUCompensar
						</h1>
						<p class="text-white-50 mb-4 lead">
								Este es un espacio creado para compartir vivencias de egresados, docentes y estudiantes, as&iacute; como para resolver dudas a trav&eacute;s de la participaci&oacute;n
						</p>
						<a href="pages/course-filter-list.html" class="btn btn-success">Preguntas y respuestas</a>
						<a href="pages/sign-in.html" class="btn btn-white">Red Social y Noticias</a>
					</div>
				</div>
				<div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
					<img src="views/assets/images/hero/hero-img.png" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white py-4 shadow-sm">
		<div class="container">
			<div class="row align-items-center no-gutters">
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
					<div class="d-flex align-items-center">
							<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "><i class="fe fe-video"> </i></span>
							<div class="ml-3">
								<h4 class="mb-0 font-weight-semi-bold">Guias en l&iacute;nea</h4>
								<p class="mb-0">Sobre gran variedad de temas</p>
							</div>
					</div>
				</div>
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
					<div class="d-flex align-items-center">
						<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i class="fe fe-users"> </i></span>
						<div class="ml-3">
							<h4 class="mb-0 font-weight-semi-bold">Docentes experimentados</h4>
							<p class="mb-0">Gran calidad de nuestro personal</p>
						</div>
					</div>
				</div>
				<!-- Features -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<div class="d-flex align-items-center">
						<span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning font-size-md "> <i class="fe fe-clock"> </i></span>
						<div class="ml-3">
							<h4 class="mb-0 font-weight-semi-bold">Multiplataforma</h4>
							<p class="mb-0">Accede desde cualquier navegador</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Content -->
    <div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="mb-0">&Uacute;ltimas actualizaciones</h2>
                </div>
            </div>
            <div class="position-relative">
                <ul class="controls " id="sliderFirstControls">
                    <li class="prev">
                        <i class="fe fe-chevron-left"></i>
                    </li>
                    <li class="next">
                        <i class="fe fe-chevron-right"></i>
                    </li>
                </ul>
                <div class="sliderFirst">
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-react.jpg" alt="" class="rounded-top card-img-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">How to
                    easily create a website with React</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(7,700)</span>
                                </div>
                                <!-- Price -->
                                <div class="lh-1 mt-3">
                                    <span class="text-dark font-weight-bold">$600</span>
                                    <del class="font-size-xs text-muted">$750</del>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Morris Mccoy</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-graphql.jpg" alt="" class="rounded-top card-img-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                    introduction to graphQL for beginners</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                    </svg> Advance
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(9,300)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Ted Hawkins</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                    the complete guide for beginner</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(8,890)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Juanita Bell</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                    Python
                    Course: build web application</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Intermediate
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(13,245)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Claire Robertson</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-graphql.jpg" alt="" class="rounded-top card-img-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">GraphQL:
                    introduction to graphQL for beginners</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                    </svg> Advance
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(9,300)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Ted Hawkins</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-angular.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Angular -
                    the complete guide for beginner</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(8,890)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Juanita Bell</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-python.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">The
                    Python
                    Course: build web application</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Intermediate
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(13,245)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Claire Robertson</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-lg-3 pt-lg-3">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="mb-0">Most Popular</h2>
                </div>
            </div>
            <div class="position-relative">
                <ul class="controls " id="sliderSecondControls">
                    <li class="prev">
                        <i class="fe fe-chevron-left"></i>
                    </li>
                    <li class="next">
                        <i class="fe fe-chevron-right"></i>
                    </li>
                </ul>
                <div class="sliderSecond">
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-gatsby.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Gatsby
                    JS:
                    build blog with GraphQL and React</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>3h 56m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(9,370)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-5.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Morris Mccoy</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
                    Started with JavaScript</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                    </svg> Advance
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(5,245)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Ted Hawkins</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
                    ultimate CSS course from beginner to advanced</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(17,000)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Juanita Bell</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
                    complete WordPress theme & plugin development</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Intermediate
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(16,500)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Claire Robertson</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-javascript.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Getting
                    Started with JavaScript</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 46m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE" />
                    </svg> Advance
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(5,245)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Ted Hawkins</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-css.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">CSS:
                    ultimate CSS course from beginner to advanced</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>1h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Beginner
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(17,000)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-7.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Juanita Bell</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Card -->
                        <div class="card  mb-4 card-hover">
                            <a href="pages/course-single.html" class="card-img-top"><img src="views/assets/images/course/course-wordpress.jpg" alt="" class="card-img-top rounded-top"></a>
                            <!-- Card Body -->
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2 "><a href="pages/course-single.html" class="text-inherit">Wordpress:
                    complete WordPress theme & plugin development</a></h4>
                                <!-- List -->
                                <ul class="mb-3 list-inline">
                                    <li class="list-inline-item"><i class="far fa-clock mr-1"></i>2h 30m</li>
                                    <li class="list-inline-item">
                                        <svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE" />
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE" />
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9" />
                    </svg> Intermediate
                                    </li>
                                </ul>
                                <div class="lh-1">
                                    <span>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning mr-n1"></i>
                    <i class="mdi mdi-star text-warning"></i>
                  </span>
                                    <span class="text-warning">4.5</span>
                                    <span class="font-size-xs text-muted">(16,500)</span>
                                </div>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="views/assets/images/avatar/avatar-8.jpg" class="rounded-circle avatar-xs" alt="">
                                    </div>
                                    <div class="col ml-2">
                                        <span>Claire Robertson</span>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="text-muted bookmark">
                                            <i class="fe fe-bookmark  "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <!-- Footer --> 
  <?php
  include('views/footer.php');
  include('views/scripts.php');
  ?>