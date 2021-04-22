<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-default">
	<div class="container-fluid px-0">
		<a class="navbar-brand" href="./"><img src="views/assets/images/brand/logo/logo.jpg" width="250px" alt=""/></a>
		<!-- Mobile view nav wrap -->
		<ul
			class="navbar-nav navbar-right-wrap ml-auto d-lg-none d-flex nav-top-wrap"
		>

			<li class="dropdown ml-2">
				<a
					class="rounded-circle"
					href="#!"
					role="button"
					id="dropdownUser"
					data-toggle="dropdown"
					aria-haspopup="true"
					aria-expanded="false"
				>
					<div class="avatar avatar-md avatar-indicators avatar-online">
						<img
							alt="avatar"
							src="views/assets/images/avatar/avatar-1.jpg"
							class="rounded-circle"
						/>
					</div>
				</a>
				<div
					class="dropdown-menu dropdown-menu-right shadow"
					aria-labelledby="dropdownUser"
				>
					<div class="dropdown-item">
						<div class="d-flex">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img
									alt="avatar"
									src="views/assets/images/avatar/avatar-1.jpg"
									class="rounded-circle"
								/>
							</div>
							<div class="ml-3 lh-1">
								<h5 class="mb-1"><?php echo $user->getNombre(); ?></h5>
								<p class="mb-0 text-muted"><?php echo $user->getCorreo(); ?></p>
							</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<ul class="list-unstyled">
						<li>
							<a class="dropdown-item" href="./profile">
								<i class="fe fe-user mr-2"></i>Perfil
							</a>
						</li>
					</ul>
					<div class="dropdown-divider"></div>
					<ul class="list-unstyled">
						<li>
							<a class="dropdown-item" href="./logout">
								<i class="fe fe-power mr-2"></i>Salir
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- Button -->
		<button
			class="navbar-toggler collapsed"
			type="button"
			data-toggle="collapse"
			data-target="#navbar-default"
			aria-controls="navbar-default"
			aria-expanded="false"
			aria-label="Toggle navigation"
		>
			<span class="icon-bar top-bar mt-0"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>
		<!-- Collapse -->
		<div class="collapse navbar-collapse" id="navbar-default">
			<form style="width:100%" class="mt-3 mt-lg-0 ml-lg-3 d-flex align-items-center">
				<span class="position-absolute pl-3 search-icon">
					<i class="fe fe-search"></i>
				</span>
				<input
					type="search"
					class="form-control pl-6"
					placeholder="Buscar"
				/>
			</form>
			<ul class="navbar-nav navbar-right-wrap ml-auto d-none d-lg-block">
				<li class="dropdown ml-2 d-inline-block">
					<a
						class="rounded-circle"
						href="#!"
						role="button"
						id="dropdownUserProfile"
						data-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					>
						<div class="avatar avatar-md avatar-indicators avatar-online">
							<img
								alt="avatar"
								src="views/assets/images/avatar/avatar-1.jpg"
								class="rounded-circle"
							/>
						</div>
					</a>
					<div
						class="dropdown-menu dropdown-menu-right"
						aria-labelledby="dropdownUserProfile"
					>
						<div class="dropdown-item">
							<div class="d-flex">
								<div class="avatar avatar-md avatar-indicators avatar-online">
									<img
										alt="avatar"
										src="views/assets/images/avatar/avatar-1.jpg"
										class="rounded-circle"
									/>
								</div>
								<div class="ml-3 lh-1">
									<h5 class="mb-1"><?php echo $user->getNombre();?></h5>
									<p class="mb-0 text-muted"><?php echo $user->getCorreo();?></p>
								</div>
							</div>
						</div>
						<div class="dropdown-divider"></div>
						<ul class="list-unstyled">
							<li>
								<a class="dropdown-item" href="./profile">
									<i class="fe fe-user mr-2"></i>Perfil
								</a>
							</li>
						</ul>
						<div class="dropdown-divider"></div>
						<ul class="list-unstyled">
							<li>
								<a class="dropdown-item" href="./logout">
									<i class="fe fe-power mr-2"></i>Salir
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>