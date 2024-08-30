<?php

class Content
{
    private $title;
    private $text;
    private $content_type;
    public function __construct($title, $text, $content_type)
    {
        $this->title = $title;
        $this->text = $text;
        $this->content_type = $content_type;
    }

    function displayContent()
    {
        if ($this->content_type === 'artical') {
            $output = "
            <h3>BREAKING:  " . $this->title . "</h3>
            <p>" . $this->text . "</p>
            ";
        } elseif ($this->content_type === 'ads') {

            $output = "<ul>
            <li style='text-transform:uppercase'>:  " . $this->title . "  " . $this->text . "</li>
            </ul>";
        } elseif ($this->content_type === 'vacancies') {
            $output = "
            <h3>" . $this->title . "</h3>
            <p>" . $this->text . " - apply now!</p>
            ";
        }
        return $output;
    }
}

$news = new Content('Interesting Article', "This is the text of the first article.", 'artical');
echo $news->displayContent() . "<br>";

$ads = new Content('Interesting Article', "This is the text of the first article.", 'ads');
echo $ads->displayContent() . "<br>";

$vacancies = new Content('Job', "This is the text of the first article.", 'vacancies');
echo $vacancies->displayContent() . "<br>";
