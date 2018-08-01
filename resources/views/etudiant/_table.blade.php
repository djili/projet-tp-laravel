<table class="table">
    <tr>
        <th>
            {{trans('etudiant.nom')}}
        </th>
        <th>
            {{trans('etudiant.prenom')}}
        </th>
        <th>Action</th>
    </tr>
    @foreach($etudiants as $etudiant)
    <tr>
        <th>
            {{$etudiant->nom}}
        </th>
        <th>
            {{$etudiant->prenom}}
        </th>
        <th>
            <button type="button" class="btn btn-primary">
                <a href="{{route('showEtudiant', $etudiant->id)}}" style="color:inherit">{{trans('commun.details')}}</a>
            </button>
        </th>
        <th>
            <button type="button" class="btn btn-primary">
                <a href="{{route('editEtudiant', $etudiant->id)}}" style="color:inherit">{{trans('commun.modifier')}}</a>
            </button>
        </th>
        <th>
            <button type="button" class="btn btn-primary">
                <a href="{{route('deleteEtudiant', $etudiant->id)}}" style="color:inherit">{{trans('commun.supprimer')}}</a>
            </button>
        </th>
    </tr>
    @endforeach
</table>
