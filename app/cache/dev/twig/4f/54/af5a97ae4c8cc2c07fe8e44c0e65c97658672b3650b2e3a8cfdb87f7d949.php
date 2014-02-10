<?php

/* MauriceCalendarBundle:Default:index.html.twig */
class __TwigTemplate_4f54af5a97ae4c8cc2c07fe8e44c0e65c97658672b3650b2e3a8cfdb87f7d949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Lesagenda";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/calendar/css/fullcalendar.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/calendar/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/calendar/js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/calendar/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "

    <script>
    \$(document).ready(function() {
\t
\t\tvar date = new Date();
\t\tvar d = date.getDate();
\t\tvar m = date.getMonth();
\t\tvar y = date.getFullYear();
\t\t
\t\t\$('#calendar').fullCalendar({
\t\t\theader: {
\t\t\t\tleft: 'prev,next today',
\t\t\t\tcenter: 'title',
\t\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t\t},
\t\t\teditable: true,
\t\t\tevents: [
\t\t\t\t{
\t\t\t\t\ttitle: 'All Day Event',
\t\t\t\t\tstart: new Date(y, m, 1)
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Long Event',
\t\t\t\t\tstart: new Date(y, m, d-5),
\t\t\t\t\tend: new Date(y, m, d-2)
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tid: 999,
\t\t\t\t\ttitle: 'Repeating Event',
\t\t\t\t\tstart: new Date(y, m, d-3, 16, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tid: 999,
\t\t\t\t\ttitle: 'Repeating Event',
\t\t\t\t\tstart: new Date(y, m, d+4, 16, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Meeting',
\t\t\t\t\tstart: new Date(y, m, d, 10, 30),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Lunch',
\t\t\t\t\tstart: new Date(y, m, d, 12, 0),
\t\t\t\t\tend: new Date(y, m, d, 14, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Birthday Party',
\t\t\t\t\tstart: new Date(y, m, d+1, 19, 0),
\t\t\t\t\tend: new Date(y, m, d+1, 22, 30),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Click for Google',
\t\t\t\t\tstart: new Date(y, m, 28),
\t\t\t\t\tend: new Date(y, m, 29),
\t\t\t\t\turl: 'http://google.com/'
\t\t\t\t}
\t\t\t]
\t\t});
\t\t
\t});
</script>
";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "    <div id=\"calendar\"></div>
";
    }

    public function getTemplateName()
    {
        return "MauriceCalendarBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 85,  138 => 84,  67 => 15,  64 => 14,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
