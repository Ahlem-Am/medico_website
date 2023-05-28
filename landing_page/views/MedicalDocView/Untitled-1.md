paragraphe 1:
pour bien etablir une architecture microservices , on peut suivre le patron des contextes bornés de domain driven design (conception pilotée par le  domaine).
domain driven design (DDD): cet architectural pattern est une approche de  developpement  de logiciel a l'aide d'un modele de domaine qui est une representation  conceptuelle  des elements clés de " quoi?" et de "pourquoi?"  dans le but de comprendre la termonologie et le contexte de  clients.
nous representons par la figure ci-dessous le diagramme de domaine de l'application  simplifié en montrant les differants contextes generaux representés par differents couleurs .
* couleur gris presente le contexte de gestion des articles.
* couleur vert presente le contexte de gestion des rendez-vous .
* couleur mauve presente le contexte de gestion des informations medicaux.

paragraphe 2:
 la figure x présente les composants necessaires pour notre architecture microservices:
 elle est composée:
 * d'une partie client :  interface utilisateur   monolithique consommant des microservices.
 * d'un api gateway : unique point d'entrée au systeme encapsulant l'architecture interieure du l'application .en effect il fournit  la notion de l'abstraction de l'implementation réelle des microservices .
 *  ensembles des services coté serveur:
 * * service user 
 * * service de gestion des articles
 * * service gestion des Rendez-vous
 * * service gestion de record medical
 * * service de prediction des maladies
 paragraphe 3:
* apres avoir l'etude des choix  techniques necessaires  pour concevoir unpython e architecture en microservices, nous présentons l'architecture technique montrant l'integration des différents technologies utilisées ..
*  cette architecture se compose alors de :
* * partie client developpée par html, css et javascript
* * nginx :dans cette architecture nginx est consideré  une passerelle API qui s'occupe de la gestion de traffic : créer, publier, maintenir, surveiller et sécuriser des API, ainsi il s'interface entre le traffic externe et les microservices backend.
* * docker: Docker est une plate-forme open source qui permet aux développeurs de créer, déployer, exécuter, mettre à jour et gérer des conteneurs 
Docker est un excellent outil pour gérer et déployer des microservices.
chaque service est deployé dans un "docker container"  , ainsi docker compose sera l'outil d'orchestration entre les différents microservices de façon efficace et securise
* pour les technologies de partie serveur on a utilisé :
le service  gestion des articles est developpé par laravel 
le service  gestion des utilisateurs et le service de gestion des  informations medicales sont developpé par nodejs
le service  gestion des predictions des maladies est developpé par flask 



