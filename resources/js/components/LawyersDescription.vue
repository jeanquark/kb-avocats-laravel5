<template>
	<div class="row">
		<div class="col-md">
    		<div class="card border-dark" style="">
				<div class="card-header text-center">Avocat Associé</div>
				<div class="card-body text-dark">
					<h5 class="card-title text-center">Maître Cyril Kleger</h5>
					<div class="card-text" style="text-align: justify;">
						<!-- <img :src="imgCyril" class="rounded float-right"
							alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 20px;" @mouseover="imgCyril = imgCyrilColor" @mouseleave="imgCyril = imgCyrilNb" />-->
						<img src="/images/cyril-min.jpg" class="rounded float-right image"
							alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 20px;" />
						Inscrit au barreau de Neuchâtel, Cyril Kleger est diplômé d’une Maîtrise en droit de l’Université de Neuchâtel et titulaire du Brevet d’Avocat Bernois ainsi qu’un CAS en magistrature pénale.<br />
						Passionné par la défense pénale, il en maîtrise bien les arcanes pour vous conseiller à travers toutes les étapes procédurales. A côté de ses dossiers pénaux, il intervient régulièrement dans le cadre de litiges matrimoniaux et dispose d’une pratique extensive en matière de droit des contrats.<br />
						Rigoureux et à l’écoute, Me Cyril Kleger s’attelle toujours à créer une relation de confiance et de proximité avec ses clients. Son indépendance d’esprit vous garantit une absence totale de liens d’intérêts partisans ou commerciaux.<br />
						Né en 1988, Cyril Kleger est également membre fondateur du Jeune Barreau Neuchâtelois dont il assume le service de permanence des avocats de première heure pour le canton. En parallèle de son activité d’avocat, il revêt la fonction de Juge d’instruction auprès de la Justice militaire.<br />
						Cyril Kleger se complaît dans le contradictoire et cultive un goût prononcé pour la littérature, les médias et notamment la presse écrite. Ancien arbitre de première ligue de football, Cyril Kleger a siégé, plusieurs années durant, auprès de la Commission des arbitres de l’ACVF en sa qualité de chef d’instruction et conserve encore aujourd’hui un contact régulier avec le milieu du ballon rond.
						<div class="text-center">
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
						<!--<img :src="imgGabriele" class="rounded float-left"
							alt="Photo Gabriele Beffa" style="width: 47%; padding: 0px 20px 0px 0px;" @mouseover="imgGabriele = imgGabrieleColor" @mouseleave="imgGabriele = imgGabrieleNb" />-->
							<img src="/images/gabriele-min.jpg" class="rounded float-left image"
							alt="Photo Gabriele Beffa" style="width: 47%; padding: 0px 20px 0px 0px;" />
						Inscrit au barreau de Neuchâtel depuis 2014, Gabriele Beffa est titulaire du Brevet d’Avocat Neuchâtelois ainsi qu’un CAS magistrature pénale. Durant plusieurs années, il a exercé en qualité de collaborateur au sein d’une Étude à La Chaux-de-Fonds avant d’aspirer, logiquement, au statut d’indépendant.<br />
						Baigné depuis plusieurs années déjà dans la pratique du barreau, Me Gabriele Beffa offre des conseils avisés dans ses nombreux domaines d’expertise, se profilant notamment dans le contentieux en matière de bail à loyer et du droit du travail. Il jouit également de solides compétences sur des questions de droit administratif.<br />
						Aguerri et doté d’un grand sens de l’anticipation, il en est devenu très habile procéduralement ce qui lui permet de conseiller et de défendre ses clients au mieux de leurs intérêts afin aussi de trouver des solutions pragmatiques pour des coûts raisonnables.<br />
						Né en 1986, il achève tout son cursus dans le canton de Neuchâtel dont une Maîtrise en "Droit de la Santé et des Biotechnologies" en 2012. Également Juge d’instruction militaire, Gabriele Beffa n’en perd pas moins son côté facétieux. Voyageur hors-pair, il puise son énergie dans la nature et se ressource volontiers dans la lecture d’un polar ou dans des expériences culinaires dont il cultive le goût et le secret.
						<div class="text-center">
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
