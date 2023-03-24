<?php
// class block_wes__library_main extends block_base
// LSS updated 2019.12.17 for new web site links and properly branded chat block
// LSS updated 2023.03.23 to remove chat block and just include direct contact info

class block_wes_library_main extends block_base
{
	public function init() 
	{
		$this->title = 'Library Research Help';
	} // init

	public function get_content() 
	{
		if ($this->content !== NULL) 
		{
			return $this->content;
		}

		$this->content = new stdClass;
		$this->content->text = '
<ul>
<li><a href="https://libguides.wesleyan.edu/research" target="_blank">Research Essentials</a></li>
<li><a href="https://www.wesleyan.edu/libr/research/prs-form.html" target="_blank">Meet with a librarian</a></li>
<li><a href="http://libguides.wesleyan.edu/citing" target="_blank">How to cite your sources</a></li>
<li><a href="http://libguides.wesleyan.edu/allguides/howto" target="_blank">Library how-to videos and guides</a></li>
</ul>
<p>How to reach us:<br />
<a href="mailto:reference@wesleyan.edu">reference@wesleyan.edu</a><br />
<a href="https://www.wesleyan.edu/libr/research/prs-form.html">By Appointment</a><br />
<a href="tel:860-685-3873">(860) 685-3873</a></p>
';
		$this->content->footer = '';
		return $this->content;
	} // get_content

} // class

