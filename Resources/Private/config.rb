# Syntax

# Additional imports from sass in other projects
add_import_path "node_modules/bootstrap-sass/assets/stylesheets"
add_import_path "../../../PunktDe.Website/Resources/Private/Styles/Shared"
add_import_path "node_modules"

preferred_syntax = :scss

# Folder settings
relative_assets = true					# because we're not working from the root
css_dir = "../Public/Css"			# where the CSS will saved
sass_dir = "SASS"						# where our .scss files are
images_dir = "../Public/Images"			# the folder with your images (relative path)
fonts_dir = "../Public/Styles/Fonts"	# the folder with your fonts

# preferred output style (can be overridden via the command line)
output_style = :expanded 				# alternative: :compressed

# environments
environment = :development
line_comments = true
