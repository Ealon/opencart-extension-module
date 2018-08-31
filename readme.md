# OpenCart Customized Extension Module
This module can be used in design->layout
## Usage Instruction
* Download the files, put each file into correct location(The file structure is already organized, you can simply merge these into your files)
* Change all file names to the module name you'd like to use(e.g. my_module -> our_service)
* Replace all:
  * MyModule -> OurService
  * my_module -> our_service
* Go to extensions->modules, install this new module template and add new modules
* Modify the logics according to your needs
* Enjoy~


## Examples
### 1. our_service
For layout: 1title + 1description + 3columns(1title + 1description) + 1text

e.g.

<table style="text-align: center;">
<tr>
  <td colspan="3">title</td>
</tr>
<tr>
  <td colspan="3">description</td>
</tr>
<tr>
  <td>title</td>
  <td>title</td>
  <td>title</td>
</tr>
<tr>
  <td>title</td>
  <td>title</td>
  <td>title</td>
</tr>
<tr>
  <td colspan="3">button text</td>
</tr>
</table>

&copy; Yilong Huang, 2018
