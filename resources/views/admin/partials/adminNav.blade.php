<h2 class="text-center">Espace admin</h2>
<ul id="admin-navigation" class="nav nav-pills">
    <li class="dropdown">
        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="{{Request::is('dashboard', 'dashboard/*', 'inscription/*') ? 'active' : ''}}">
            Gestion des clients
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('dashboard')}}" class="{{Request::is('dashboard') ? 'active' : ''}}">List des comptes</a></li>
            <li><a href="{{url('inscription/user')}}" class="{{Request::is('inscription/user') ? 'active' : ''}}">Créer un compte</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="{{Request::is('admin', 'admin/*') ? 'active' : ''}}">
            Gestion des dossiers
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('admin/')}}" class="{{Request::is('admin') ? 'active' : ''}}">Tous les dossiers</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="{{Request::is('article', 'createArticle', 'editArticle/*', 'article/*') ? 'active' : ''}}">
            Gestion des articles
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('article')}}" class="{{Request::is('article') ? 'active' : ''}}">Toutes les articles</a></li>
            <li><a href="{{url('createArticle')}}" class="{{Request::is('createArticle') ? 'active' : ''}}">Créer un article</a></li>
            <li><a href="{{url('article/addPicture')}}" class="{{Request::is('article/addPicture') ? 'active' : ''}}">Ajouter des photos</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="{{Request::is('testimonial', 'addTestimonial/*') ? 'active' : ''}}">
            Gestion des avis clients
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
            <li><a href="{{url('testimonial')}}" class="{{Request::is('testimonial') ? 'active' : ''}}">Liste des avis</a></li>
        </ul>
    </li>
</ul>