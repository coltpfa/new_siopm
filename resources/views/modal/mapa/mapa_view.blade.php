<div class="modal fade" id="modal-viewmap-{{$m->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mapa - visualizar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @section('scripts')
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

                $('#modal-viewmap-{{$m->id}}').on('shown.bs.modal', function () {
                    var map = L.map('map').setView([0, 0], 2); // Defina as coordenadas iniciais e o zoom desejado

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                        maxZoom: 18,
                    }).addTo(map);

                    fetch('/api/mapa/{{ $m->id }}') // Ajuste o URL da rota para a sua API
                        .then(response => response.text())
                        .then(kml => {
                            var parser = new DOMParser();
                            var kmlDocument = parser.parseFromString(kml, 'text/xml');

                            var kmlLayer = new L.KML(kmlDocument);
                            kmlLayer.addTo(map);
                        })
                        .catch(error => {
                            console.error('Erro ao carregar o arquivo KML', error);
                        });
                });
                </script>
            @endsection

            <!-- Conteúdo da página -->

            <div id="map" style="height: 400px;"></div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>

            </div>
        </div>
    </div>
</div>
