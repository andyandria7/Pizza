<script setup>
import { onMounted, ref } from 'vue';
const texts = ["Welcome", "Enjoy Our Delicious Pizza"]; // Les textes à afficher
const displayedText = ref('');
const typingSpeed = 100; // Vitesse de la saisie en millisecondes
const erasingSpeed = 50; // Vitesse de l'effacement en millisecondes
const delayBeforeErase = 1000; // Délai avant de commencer à effacer
const delayBetweenTexts = 1000; // Délai entre deux textes
const delayBetweenCycles = 2000; // Délai avant de recommencer le cycle (en millisecondes)

onMounted(() => {
  let textIndex = 0;
  let charIndex = 0;
  let isErasing = false; // Indique si on est en train d'effacer le texte

  const typeText = () => {
    if (!isErasing && charIndex < texts[textIndex].length) {
      // Si on est en mode écriture
      displayedText.value += texts[textIndex].charAt(charIndex);
      charIndex++;
      setTimeout(typeText, typingSpeed); // Continuer à écrire
    } else if (!isErasing && charIndex === texts[textIndex].length) {
      // Texte complètement écrit, attendre avant d'effacer
      setTimeout(() => {
        isErasing = true;
        typeText();
      }, delayBeforeErase); // Attendre avant de commencer l'effacement
    } else if (isErasing && charIndex > 0) {
      // Effacer un caractère à la fois
      displayedText.value = texts[textIndex].substring(0, charIndex - 1);
      charIndex--;
      setTimeout(typeText, erasingSpeed); // Continuer à effacer
    } else if (isErasing && charIndex === 0) {
      // Quand tout est effacé, passer au texte suivant
      isErasing = false;
      textIndex = (textIndex + 1) % texts.length; // Recommencer le cycle
      setTimeout(typeText, delayBetweenTexts); // Attendre avant de réécrire
    }
  };

  typeText(); // Démarrer l'animation de la machine à écrire
});
</script>

<template>
    <span>{{ displayedText  }}</span>
</template>

<style>
span {
  font-weight: bold;
  white-space: nowrap;
  overflow: hidden;
  border-right: 0.15em solid orange; /* Simule le curseur de la machine à écrire */
  animation: blink-caret 0.75s step-end infinite;
}

@keyframes blink-caret {
  from, to {
    border-color: transparent;
  }
  50% {
    border-color: orange;
  }
}
</style>