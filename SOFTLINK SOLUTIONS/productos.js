document.addEventListener('DOMContentLoaded', () => {

    const servicesData = [
        {
            id: 1,
            title: 'Desarrollo de Software a Medida',
            shortDesc: 'Creamos programas desde cero, pensados exclusivamente para tu empresa para que todo fluya mejor.',
            longDesc: 'Olvídate de adaptarte a un software genérico; nosotros hacemos que el software se adapte a ti. Nuestro equipo de expertos trabaja contigo para entender tus procesos y desarrollar soluciones robustas, escalables y eficientes que optimizan tus procesos de negocio y aumentan la productividad.',
            price: '60.000.000 - 200.000.000',
            image: 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop',
            isPromotion: true,
            availability: 5,
            features: { 'Modalidad': 'Remoto/Presencial', 'Garantía': '12 meses' }
        },
        {
            id: 2,
            title: 'Soluciones en la Nube (Cloud)',
            shortDesc: 'Llevamos tu empresa a la nube con AWS, Azure y Google para más flexibilidad y seguridad.',
            longDesc: 'Migramos y gestionamos tu infraestructura en la nube con los líderes del mercado: AWS, Azure y Google Cloud. Esto se traduce en más flexibilidad, seguridad de primera y, a menudo, un ahorro en costos. Nos encargamos de todo el proceso para que tú no te preocupes por nada.',
            price: '32.000.000 - 100.000.000',
            image: 'https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?q=80&w=2070&auto=format&fit=crop',
            isPromotion: false,
            availability: 8,
            features: { 'Plataformas': 'AWS, Azure, GCP', 'Soporte': '24/7' }
        },
        {
            id: 3,
            title: 'Ciberseguridad Avanzada',
            shortDesc: 'Blindamos tu información contra ataques y vigilamos tus sistemas 24/7 para tu tranquilidad.',
            longDesc: 'Cuidamos tu negocio como si fuera nuestro. Ofrecemos servicios de pentesting, monitoreo 24/7 y respuesta a incidentes para proteger tus activos digitales. Tu tranquilidad es nuestra prioridad.',
            price: '48.000.000 - 140.000.000',
            image: 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=2070&auto=format&fit=crop', // <-- IMAGEN NUEVA
            isPromotion: true,
            availability: 3,
            features: { 'Monitoreo': 'Continuo 24/7', 'Pentesting': 'Incluido' }
        },
        {
            id: 4,
            title: 'Análisis de Datos e IA',
            shortDesc: 'Convertimos tus datos en respuestas y estrategias usando inteligencia artificial.',
            longDesc: 'Tus datos valen oro. Usamos inteligencia artificial y Business Intelligence para encontrar patrones, predecir tendencias y ayudarte a tomar las mejores decisiones para el crecimiento de tu negocio.',
            price: '80.000.000 - 240.000.000',
            image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop',
            isPromotion: false,
            availability: 4,
            features: { 'Herramientas': 'Power BI, Tableau', 'Modelos': 'Predictivos' }
        },
        {
            id: 5,
            title: 'Desarrollo de Apps Móviles',
            shortDesc: 'Creamos aplicaciones para iPhone y Android que tus clientes amarán usar: rápidas, bonitas y útiles.',
            longDesc: 'Creamos aplicaciones nativas e híbridas para iOS y Android que tus clientes amarán. Nos enfocamos en que sean rápidas, bonitas y, sobre todo, útiles. Te acompañamos desde la idea hasta la publicación.',
            price: '40.000.000 - 160.000.000',
            image: 'https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?q=80&w=2070&auto=format&fit=crop',
            isPromotion: true,
            availability: 6,
            features: { 'Plataformas': 'iOS y Android', 'UI/UX': 'Centrado en el usuario' }
        },
        {
            id: 6,
            title: 'Consultoría TI Estratégica',
            shortDesc: 'Somos tus socios tecnológicos, trazamos un plan para que la tecnología sea tu mejor aliada.',
            longDesc: 'Nos sentamos contigo para entender a dónde quieres llegar y trazamos un plan para que la tecnología sea tu mejor aliada en ese camino. Te ayudamos a elegir e implementar las herramientas correctas.',
            price: '20.000.000 - 60.000.000',
            image: 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop', // <-- IMAGEN NUEVA
            isPromotion: false,
            availability: 10,
            features: { 'Diagnóstico': 'Completo', 'Roadmap': 'Personalizado' }
        },
        {
            id: 7,
            title: 'Soporte y Mantenimiento TI',
            shortDesc: 'Nos aseguramos de que tu tecnología simplemente funcione, previniendo problemas antes de que ocurran.',
            longDesc: 'Con nuestros planes de soporte, prevenimos problemas antes de que ocurran y resolvemos cualquier imprevisto al instante para que tu negocio nunca se detenga. Ofrecemos soporte remoto y presencial.',
            price: '15.000.000 - 50.000.000',
             image: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop',
            isPromotion: true,
            availability: 12,
            features: { 'Disponibilidad': '24/7', 'Tipo': 'Remoto y Presencial' }
        },
        {
            id: 8,
            title: 'Diseño UX/UI',
            shortDesc: 'Diseñamos interfaces intuitivas y agradables que guían a tus usuarios y se ven increíbles.',
            longDesc: 'Diseñamos interfaces intuitivas y agradables que no solo se ven bien, sino que guían a tus usuarios para que hagan exactamente lo que necesitan, mejorando la retención y la satisfacción.',
            price: '25.000.000 - 80.000.000',
            image: 'https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?q=80&w=2070&auto=format&fit=crop',
            isPromotion: false,
            availability: 7,
            features: { 'Investigación': 'User Research', 'Prototipado': 'Interactivo' }
        },
        {
            id: 9,
            title: 'Implementación ERP/CRM',
            shortDesc: 'Integramos sistemas para que tus áreas de ventas, finanzas y operaciones trabajen conectadas.',
            longDesc: 'Integramos sistemas ERP y CRM para que tus áreas de ventas, finanzas y operaciones trabajen conectadas. El resultado es menos caos, más eficiencia y clientes más felices.',
            price: '100.000.000 - 300.000.000',
            image: 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070&auto=format&fit=crop',
            isPromotion: false,
            availability: 3,
            features: { 'Sistemas': 'SAP, Salesforce, Odoo', 'Migración': 'Segura de datos' }
        },
        {
            id: 10,
            title: 'Marketing Digital y SEO',
            shortDesc: 'Hacemos que tus clientes te encuentren en internet y atraemos a las personas correctas a tu web.',
            longDesc: 'Con estrategias de posicionamiento en Google (SEO) y marketing de contenidos, atraemos a las personas correctas a tu web y te ayudamos a convertirlas en clientes.',
            price: '18.000.000 - 70.000.000',
            image: 'https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop',
            isPromotion: true,
            availability: 9,
            features: { 'SEO': 'On-Page y Off-Page', 'Reportes': 'Mensuales' }
        }
    ];

    const servicesGrid = document.getElementById('services-grid');
    const searchInput = document.getElementById('searchInput');
    const promoSwitch = document.getElementById('promoSwitch');
    const servicesListPage = document.getElementById('services-list-page');
    const serviceDetailPage = document.getElementById('service-detail-page');
    const backToServicesButton = document.getElementById('back-to-services');
    const relatedServicesGrid = document.getElementById('related-services-grid');

    const renderServiceCard = (service, container) => {
        const card = document.createElement('div');
        card.className = 'service-card';
        card.dataset.id = service.id; 
        card.innerHTML = `
            ${service.isPromotion ? '<div class="promo-tag">¡En Promoción!</div>' : ''}
            <div class="card-image-container">
                <img src="${service.image}" alt="${service.title}">
            </div>
            <div class="card-content">
                <h3>${service.title}</h3>
                <p>${service.shortDesc}</p>
                <p class="card-price">${service.price} COP</p>
                <div class="card-footer">
                    <span class="availability">${service.availability} disponibles</span>
                </div>
            </div>
        `;
        container.appendChild(card);        
        card.addEventListener('click', () => showServiceDetail(service.id));
    };

    const renderServices = (filter = '', showPromoOnly = false) => {
        servicesGrid.innerHTML = '';
        const filteredServices = servicesData.filter(service => {
            const matchesFilter = service.title.toLowerCase().includes(filter.toLowerCase()) || service.shortDesc.toLowerCase().includes(filter.toLowerCase());
            const matchesPromo = !showPromoOnly || service.isPromotion;
            return matchesFilter && matchesPromo;
        });

        if (filteredServices.length === 0) {
            servicesGrid.innerHTML = '<p>No se encontraron servicios con estos criterios.</p>';
            return;
        }

        filteredServices.forEach(service => renderServiceCard(service, servicesGrid));
    };    
   
    const renderRelatedServices = (currentServiceId) => {
        relatedServicesGrid.innerHTML = '';
        const related = servicesData
            .filter(s => s.id !== currentServiceId) 
            .sort(() => 0.5 - Math.random()) 
            .slice(0, 3); 

        related.forEach(service => renderServiceCard(service, relatedServicesGrid));
    };

    const showServiceDetail = (id) => {
        const service = servicesData.find(s => s.id === id);
        if (!service) return;

        document.getElementById('detail-img').src = service.image;
        document.getElementById('detail-title').textContent = service.title;
        document.getElementById('detail-price').textContent = `${service.price} COP`;
        document.getElementById('detail-long-desc').textContent = service.longDesc;
        
        const featuresList = document.getElementById('detail-features');
        featuresList.innerHTML = '';
        for (const [key, value] of Object.entries(service.features)) {
            const li = document.createElement('li');
            li.innerHTML = `<span>${key}</span> <span>${value}</span>`;
            featuresList.appendChild(li);
        }
        
        renderRelatedServices(id); 
        
        servicesListPage.classList.add('hidden');
        serviceDetailPage.classList.remove('hidden');
        window.scrollTo(0, 0);
    };

    const showServicesList = () => {
        serviceDetailPage.classList.add('hidden');
        servicesListPage.classList.remove('hidden');
    };

    searchInput.addEventListener('input', () => renderServices(searchInput.value, promoSwitch.checked));
    promoSwitch.addEventListener('change', () => renderServices(searchInput.value, promoSwitch.checked));
    backToServicesButton.addEventListener('click', showServicesList);

    renderServices(); 
});