// JavaScript principal
document.addEventListener('DOMContentLoaded', function() {
    console.log('Proyecto PHP cargado correctamente');
    
    // Ejemplo: agregar interactividad
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        section.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
