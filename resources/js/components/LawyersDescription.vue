<template>
	<div class="row">
		<div class="col-md">
    		<div class="card border-dark" style="">
				<div class="card-header text-center">Avocat Associé</div>
				<div class="card-body text-dark">
					<h5 class="card-title text-center">Maître Cyril Kleger</h5>
					<div class="card-text" style="text-align: justify;">
						<!--<img :src="imgCyril" class="rounded float-right"
							alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 20px;" @mouseover="imgCyril = imgCyrilColor" @mouseleave="imgCyril = imgCyrilNb" />-->
						<img src="/images/cyril-min.jpg" class="rounded float-right image"
							alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 20px;" />
						Inscrit au barreau de Neuchâtel, Cyril Kleger exerce son activité essentiellement en
						matière de droit pénal mais intervient régulièrement dans le cadre des litiges
						matrimoniaux et des droits des contrats.
						En parallèle de son activité d’avocat, il revêt la fonction d'auditeur (procureur) avec le grade de major après avoir servi quatre ans comme juge d'instruction militaire.<br />
						Né en 1988, il est titulaire d’une Maîtrise en droit de l’Université de Neuchâtel et
						titulaire du Brevet d’Avocat Bernois. Il a également achevé un <i>Certificate of
							Advanced Studies</i> en magistrature pénale dans sa discipline de
						prédilection.<br />
						Membre fondateur du Jeune Barreau Neuchâtelois dont il assume le service de permanence
						des avocats de première heure, Cyril Kleger cultive un goût prononcé pour les lettres,
						la presse et le sport.<br />
						Ancien arbitre de première ligue de football, Cyril Kleger garde encore un contact régulier avec le milieu du ballon rond en tant qu'instructeur arbitre et ancien chef d'instruction au sein de la Commission des arbitres de l’ACVF.<br />

						<div class="text-center mt-2">
							<button type="button" class="btn btn-dark" @click="toggleShow('cyril')">
								<span v-if="showMoreCyril">Moins
									<font-awesome-icon icon="angle-up" /></span>
								<span v-else>Plus
									<font-awesome-icon icon="angle-down" /></span>
							</button>
						</div>

						<div>
							<slide-up-down :active="showMoreCyril" :duration="1000">
								<br />
								<ul>
									<li>Membre de la Fédération Suisse des Avocats</li>
									<li>Membre de l’Ordre des Avocats Neuchâtelois et de l’Association des
										Avocats Bernois</li>
									<li>Membre fondateur du Jeune Barreau Neuchâtelois</li>
									<li>Inspecteur & Instructeur diplômé par l’Association Suisse de Football
									</li>
								</ul>
								<br />
							</slide-up-down>
						</div>
					</div>
				</div>
			</div>
			<br />

		</div>
		<div class="col">
			<div class="card border-dark" style="">
				<div class="card-header text-center">Avocat Associé</div>
				<div class="card-body text-dark">
					<h5 class="card-title text-center">Maître Gabriele Beffa</h5>
					<div class="card-text" style="text-align: justify;">
							<img src="/images/gabriele-min.jpg" class="rounded float-left image"
							alt="Photo Gabriele Beffa" style="width: 47%; padding: 0px 20px 0px 0px;" />
						Inscrit au barreau de Neuchâtel depuis 2014, Gabriele Beffa est titulaire du Brevet d’Avocat Neuchâtelois ainsi qu’un CAS magistrature pénale. Durant plusieurs années, il a exercé en qualité de collaborateur au sein d’une Étude à La Chaux-de-Fonds avant d’aspirer, logiquement, au statut d’indépendant.<br />
						Baigné depuis plusieurs années déjà dans la pratique du barreau, Me Gabriele Beffa offre des conseils avisés dans ses nombreux domaines d’expertise, se profilant notamment dans le contentieux en matière de bail à loyer et du droit du travail. Il jouit également de solides compétences sur des questions de droit administratif.<br />
						Aguerri et doté d’un grand sens de l’anticipation, il en est devenu très habile procéduralement ce qui lui permet de conseiller et de défendre ses clients au mieux de leurs intérêts afin aussi de trouver des solutions pragmatiques pour des coûts raisonnables.<br />
						Né en 1986, il achève tout son cursus dans le canton de Neuchâtel dont une Maîtrise en "Droit de la Santé et des Biotechnologies" en 2012. Ancien Juge d’instruction militaire et depuis promu comme auditeur, Gabriele Beffa n’en perd pas moins son côté facétieux. Voyageur hors-pair, il puise son énergie dans la nature et se ressource volontiers dans la lecture d’un polar ou dans des expériences culinaires dont il cultive le goût et le secret.
						<div class="text-center mt-2">
							<button type="button" class="btn btn-dark" @click="toggleShow('gabriele')">
								<span v-if="showMoreGabriele">Moins
									<font-awesome-icon icon="angle-up" /></span>
								<span v-else>Plus
									<font-awesome-icon icon="angle-down" /></span>
							</button>
						</div>

						<div>
							<slide-up-down :active="showMoreGabriele" :duration="1000">
								<br />
								<ul>
									<li>Membre de la Fédération Suisse des Avocats</li>
									<li>Membre de l’Ordre des Avocats Neuchâtelois</li>
									<li>Membre du Jeune Barreau Neuchâtelois</li>
								</ul>
								<br />
							</slide-up-down>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import SlideUpDown from 'vue-slide-up-down'
export default {
    components: { SlideUpDown },
    data() {
        return {
            showMoreCyril: false,
            showMoreGabriele: false
            // imgCyril: '/images/cyril_nb-min.jpg',
            // imgCyrilNb: '/images/cyril_nb-min.jpg',
            // imgCyrilColor: '/images/cyril-min.jpg',
            // imgGabriele: '/images/gabriele_nb-min.jpg',
            // imgGabrieleNb: '/images/gabriele_nb-min.jpg',
            // imgGabrieleColor: '/images/gabriele-min.jpg'
        }
    },
    methods: {
        toggleShow(lawyer) {
            if (lawyer === 'cyril') {
                this.showMoreCyril = !this.showMoreCyril
            } else {
                this.showMoreGabriele = !this.showMoreGabriele
            }
        }
    }
}
</script>

<style scoped>
.image {
    filter: grayscale(1);
}
.image:hover {
    filter: grayscale(0);
}
</style>
