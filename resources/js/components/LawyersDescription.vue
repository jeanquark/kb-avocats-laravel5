<template>
<div class="row">
				<div class="col-md">
    <div class="card border-dark" style="">
						<div class="card-header text-center">Avocat Associé</div>
						<div class="card-body text-dark">
							<h5 class="card-title text-center">Maître Cyril Kleger</h5>
							<div class="card-text" style="text-align: justify;">
								<img src="/images/cyril_kleger2-min.jpg" class="rounded float-right"
									alt="Photo Cyril Kleger" style="width: 50%; padding: 0px 0px 0px 10px;" />
								Inscrit au barreau de Neuchâtel, Cyril Kleger exerce son activité essentiellement en
								matière de droit pénal mais intervient régulièrement dans le cadre des litiges
								matrimoniaux et des droits des contrats.
								En parallèle de son activité d’avocat, il revêt la fonction de Juge d’instruction auprès
								de la Justice militaire.<br />
								Né en 1988, il est titulaire d’une Maîtrise en droit de l’Université de Neuchâtel et
								titulaire du Brevet d’Avocat Bernois. Il vient d'achever récemment un <i>Certificate of
									Advanced Studies</i> en magistrature pénale dans sa discipline de
								prédilection.<br />
								Membre fondateur du Jeune Barreau Neuchâtelois dont il assume le service de permanence
								des avocats de première heure, Cyril Kleger cultive un goût prononcé pour les lettres,
								la presse et le sport.<br />
								Ancien arbitre de première ligue de football, Cyril Kleger garde encore un contact
								régulier avec le milieu du ballon rond et siège dans la Commission des arbitres de
								l’ACVF en sa qualité de Chef d’instruction.<br />

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
								<img src="/images/gabriele_beffa-min.jpg" class="rounded float-left"
									alt="Photo Gabriele Beffa" style="width: 53%; padding: 0px 10px 0px 0px;" />
								Inscrit au barreau de Neuchâtel depuis 2014, Gabriele Beffa offre principalement ses
								services en matière matrimoniale, en défense pénale, dans le cadre du droit des
								obligations et dans le domaine administratif.
								Gabriele Beffa est né le 9 octobre 1986 à Genève. Après avoir obtenu sa maturité
								gymnasiale, il a entamé des études de droit à l’Université de Neuchâtel en 2006
								sanctionné d’une Maîtrise en Droit en orientation « droit de la santé et des
								biotechnologies » en 2012.<br />
								Titulaire du Brevet d’Avocat Neuchâtelois, il a d’abord exercé en qualité de
								collaborateur au sein de l’Etude Nardin & Röthlisberger à La Chaux-de-Fonds puis obtient
								en 2016 un <i>Certificate of Advanced Studies</i> en magistrature pénale.<br />
								Également Juge d’instruction militaire, il est adepte de sport en général, plus
								particulièrement d’unihockey et effectue une activité de journaliste sportif dans le
								domaine du hockey sur glace.
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
        }
    },
    methods: {
        toggleShow(lawyer) {
            // console.log('toggleShow: ', lawyer)
            if (lawyer === 'cyril') {
                this.showMoreCyril = !this.showMoreCyril
            } else {
                this.showMoreGabriele = !this.showMoreGabriele
            }
        }
    }
}
</script>
