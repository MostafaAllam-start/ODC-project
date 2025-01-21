<div align="left" style="position: relative;">
<h1>ODC-PROJECT</h1>
<p align="left">
	<em><code>❯ This project is for the Orange Digital Center training.
</code></em>
</p>
<p align="left">
	<img src="https://img.shields.io/github/license/MostafaAllam-start/ODC-project?style=default&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/MostafaAllam-start/ODC-project?style=default&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/MostafaAllam-start/ODC-project?style=default&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/MostafaAllam-start/ODC-project?style=default&color=0080ff" alt="repo-language-count">
</p>
<p align="left"><!-- default option, no dependency badges. -->
</p>
<p align="left">
	<!-- default option, no dependency badges. -->
</p>
</div>
<br clear="right">

##  Table of Contents

- [ Overview](#-overview)
- [ Features](#-features)
- [ Project Structure](#-project-structure)
  - [ Project Index](#-project-index)
- [ Getting Started](#-getting-started)
  - [ Prerequisites](#-prerequisites)
  - [ Installation](#-installation)
---

##  Overview

<code>❯The project implements the idea of multi-auth systems as we have 3 users admin, lawyer and user each has its permissions.
The admin user can manage the whole system and have all the permissions
The Lawyer user can upload articales, comment on other Lawyers' articales.
The user can only comment on the Lawyers' articales
</code>

---

##  Features

multi-auth system using php

---

##  Project Structure

```sh
└── ODC-project/
    ├── Lawyer
    │   ├── add.php
    │   ├── add_form.php
    │   ├── lawyer_profile.php
    │   └── upload
    ├── admin
    │   ├── add.php
    │   ├── add_admin.php
    │   ├── add_articale.php
    │   ├── add_form.php
    │   ├── add_lawyer.php
    │   ├── add_user.php
    │   ├── admin_dashboard.php
    │   ├── admin_profile.php
    │   ├── detail_admin.php
    │   ├── detail_articale.php
    │   ├── detail_lawyer.php
    │   ├── detail_user.php
    │   ├── list_admin.php
    │   ├── list_articale.php
    │   ├── list_lawyer.php
    │   ├── list_user.php
    │   └── upload
    ├── articale
    │   ├── add.php
    │   ├── add_form.php
    │   └── upload
    ├── assets
    │   ├── css
    │   │   ├── all.min.css
    │   │   ├── bootstrap.min.css
    │   │   ├── reset.css
    │   │   └── style.css
    │   └── js
    │       ├── all.min.js
    │       └── bootstrap.bundle.min.js
    ├── auth
    │   └── login.php
    ├── general
    │   ├── env.php
    │   └── function.php
    ├── shared
    │   ├── footer.php
    │   ├── head.php
    │   ├── home.php
    │   └── nav.php
    └── user
        ├── add.php
        ├── add_form.php
        └── upload
```


###  Project Index
<details open>
	<summary><b><code>ODC-PROJECT/</code></b></summary>
	<details> <!-- __root__ Submodule -->
		<summary><b>__root__</b></summary>
		<blockquote>
			<table>
			</table>
		</blockquote>
	</details>
	<details> <!-- shared Submodule -->
		<summary><b>shared</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/shared/nav.php'>nav.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/shared/home.php'>home.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/shared/footer.php'>footer.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/shared/head.php'>head.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- articale Submodule -->
		<summary><b>articale</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/articale/add.php'>add.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/articale/add_form.php'>add_form.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- Lawyer Submodule -->
		<summary><b>Lawyer</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/Lawyer/lawyer_profile.php'>lawyer_profile.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/Lawyer/add.php'>add.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/Lawyer/add_form.php'>add_form.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- general Submodule -->
		<summary><b>general</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/general/env.php'>env.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/general/function.php'>function.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- auth Submodule -->
		<summary><b>auth</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/auth/login.php'>login.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- user Submodule -->
		<summary><b>user</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/user/add.php'>add.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/user/add_form.php'>add_form.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- admin Submodule -->
		<summary><b>admin</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/detail_lawyer.php'>detail_lawyer.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/admin_dashboard.php'>admin_dashboard.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/admin_profile.php'>admin_profile.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/list_articale.php'>list_articale.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add_lawyer.php'>add_lawyer.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add.php'>add.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/detail_user.php'>detail_user.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/detail_articale.php'>detail_articale.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add_user.php'>add_user.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/list_lawyer.php'>list_lawyer.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/detail_admin.php'>detail_admin.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add_admin.php'>add_admin.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/list_user.php'>list_user.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add_articale.php'>add_articale.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/add_form.php'>add_form.php</a></b></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/ODC-project/blob/master/admin/list_admin.php'>list_admin.php</a></b></td>
			</tr>
			</table>
		</blockquote>
	</details>
</details>

---
##  Getting Started

###  Prerequisites

Before getting started with ODC-project, ensure you install laragon or xammp on your machine

- **Programming Language:** PHP


###  Installation

Install ODC-project using the following methods:

**Build from source:**

1. Clone the ODC-project repository in the directory www of laragon directory:
```sh
❯ git clone https://github.com/MostafaAllam-start/ODC-project
```

2. Navigate to the project directory:
```sh
❯ cd ODC-project
```
