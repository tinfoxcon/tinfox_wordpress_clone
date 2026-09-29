<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
</head>
<body>

<h1 id="logo">
	<a href="https://tinfoxconsulting.com/">
		<strong>Tinfox Consulting</strong>
	</a>
</h1>

<p style="text-align: center">WordPress-based Corporate Website</p>

<h2>About This Project</h2>

<p>
	This repository contains the Docker-based WordPress application used to
	build and deploy the official <strong>Tinfox Consulting</strong> website.
</p>

<p>
	The website is built on WordPress and customized for Tinfox Consulting's
	business, services, content, branding, and online presence.
</p>

<p>
	<strong>Website:</strong>
	<a href="https://tinfoxconsulting.com/">https://tinfoxconsulting.com/</a>
</p>

<p>
	<strong>Company:</strong> Tinfox Consulting LLP
</p>

<h2>Technology Stack</h2>

<ul>
	<li>WordPress</li>
	<li>PHP</li>
	<li>Apache</li>
	<li>Docker</li>
	<li>MySQL-compatible database</li>
	<li>HTML / CSS / JavaScript</li>
	<li>Render for application deployment</li>
</ul>

<h2>Deployment</h2>

<p>
	The application is containerized using Docker and deployed through
	Render.
</p>

<p>
	Production database credentials, API keys, authentication credentials,
	OAuth secrets, SMTP credentials, and other sensitive configuration values
	are managed outside this repository through environment variables and
	deployment configuration.
</p>

<p>
	<strong>
		No production credentials or secrets should be committed to this
		public repository.
	</strong>
</p>

<h2>Local Development</h2>

<p>
	For local development, use a separate development database and environment
	configuration. Do not use production credentials in local development or
	commit local environment files containing secrets.
</p>

<p>Typical sensitive files and values should remain outside Git, including:</p>

<ul>
	<li><code>.env</code></li>
	<li>Production <code>wp-config.php</code></li>
	<li>Database passwords</li>
	<li>API keys</li>
	<li>OAuth client secrets</li>
	<li>SMTP credentials</li>
	<li>Private keys</li>
	<li>Service-account credentials</li>
	<li>Production environment variables</li>
</ul>

<p>
	Use an <code>.env.example</code> file when documenting required environment
	variables without including their actual values.
</p>

<h2>WordPress</h2>

<p>
	This project uses <a href="https://wordpress.org/">WordPress</a> as its
	content management platform.
</p>

<p>
	WordPress is open-source software distributed under the
	<strong>GNU General Public License, version 2 or later
	(GPL-2.0-or-later)</strong>.
</p>

<p>Official WordPress resources:</p>

<ul>
	<li>
		<a href="https://wordpress.org/">WordPress</a>
	</li>
	<li>
		<a href="https://wordpress.org/documentation/">WordPress Documentation</a>
	</li>
	<li>
		<a href="https://developer.wordpress.org/">WordPress Developer Resources</a>
	</li>
	<li>
		<a href="https://wordpress.org/support/forums/">WordPress Support Forums</a>
	</li>
</ul>

<p>
	WordPress core should not be modified unnecessarily. Custom functionality
	should preferably be implemented through themes, child themes, plugins,
	or other appropriate extension mechanisms.
</p>

<h2>Third-Party Software</h2>

<p>
	This repository may contain or use third-party open-source software,
	themes, plugins, libraries, and other components.
</p>

<p>
	Each third-party component remains subject to its respective license and
	copyright terms.
</p>

<p>
	The presence of third-party software in this repository does not transfer
	ownership of that software to Tinfox Consulting LLP.
</p>

<p>
	Where applicable, original copyright notices and license files are
	retained.
</p>

<h2>Tinfox Consulting Materials</h2>

<p>
	Tinfox Consulting's original branding, logos, website content, service
	descriptions, design assets, custom configurations, and original custom
	code are proprietary to <strong>Tinfox Consulting LLP</strong>, unless
	otherwise stated.
</p>

<p>
	Copyright and licensing for third-party components remain with their
	respective owners.
</p>

<p>
	Nothing in this repository should be interpreted as granting permission
	to use Tinfox Consulting's trademarks, branding, proprietary content, or
	other protected materials without authorization.
</p>

<h2>Security</h2>

<p>
	This is a public repository. <strong>Do not commit confidential or
	sensitive information.</strong>
</p>

<p>
	If you discover a potential security vulnerability involving this project,
	please do not disclose sensitive details through a public GitHub issue.
</p>

<p>
	Please report security concerns privately to:
</p>

<p>
	<strong>
		<a href="mailto:contact@tinfoxconsulting.com">
			contact@tinfoxconsulting.com
		</a>
	</strong>
</p>

<h2>Contributions</h2>

<p>
	This repository primarily supports the Tinfox Consulting website and is
	not intended to accept unrestricted changes to the production application.
</p>

<p>
	Changes to the production codebase should be reviewed before being merged
	into the protected production branch.
</p>

<p>
	Pull requests should contain a clear description of the change and should
	not include credentials, secrets, personal data, or other confidential
	information.
</p>

<h2>Production Changes</h2>

<p>
	Production changes should follow the project's Git workflow:
</p>

<pre>
Feature / Fix Branch
        ↓
Pull Request
        ↓
Automated Checks
        ↓
Review
        ↓
Merge
        ↓
Production Branch
        ↓
Render Deployment
</pre>

<p>
	Direct changes to the protected production branch should be avoided.
</p>

<h2>License</h2>

<h3>WordPress</h3>

<p>
	WordPress is free software and is distributed under the terms of the
	<strong>GNU General Public License, version 2 or, at your option, any
	later version</strong>.
</p>

<p>
	See the included <code>license.txt</code> file for the applicable
	WordPress license.
</p>

<h3>Tinfox Consulting</h3>

<p>
	Unless otherwise stated, Tinfox Consulting LLP retains rights to its
	original proprietary website content, branding, custom code, design
	materials, and configurations contained in this project.
</p>

<p>
	Third-party software remains licensed under its respective licenses.
</p>

<hr />

<p>
	<strong>Tinfox Consulting LLP</strong><br />
	Website:
	<a href="https://tinfoxconsulting.com/">https://tinfoxconsulting.com/</a><br />
	Email:
	<a href="mailto:contact@tinfoxconsulting.com">
		contact@tinfoxconsulting.com
	</a>
</p>

</body>
</html>
