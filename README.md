# Codeigniter 3 Template Library
CodeIgniter 3 Template library - HMVC Compatible

## Installation

1. Download latest released package from github.
2. Extract the archive to a safe directory.
3. Move/Copy Template.php from application/libraries to codeigniter's application/libraries/ directory.
4. load this library in codeigniter's autoload.
.... and you are done.

## Usage

#### If you are using HMVC...
1. Place your main template/view file in application/views/
2. Your partial or sub-views will be in placed in each module /views/ directory.
3. In your controller, Call this library as

`$this->template->load($main_template_file, $partial_view_file, $data);`