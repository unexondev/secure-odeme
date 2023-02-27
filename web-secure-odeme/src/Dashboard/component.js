import React, { Component } from "react";
import { Container, Card, Button } from "react-bootstrap";

import sahibinden_icon from "../Assets/Images/sahibinden_icon.jpg";
import trx_icon from "../Assets/Images/trx_icon.png";
import dolap_icon from "../Assets/Images/dolap_icon.jpg";


class Dashboard extends Component {

	render() {

		return (

			<Container fluid="xxl" className="h-100 d-flex flex-wrap" style={{"paddingTop": "100px"}}>
				
				<div className="p-3">
					<Card bg="secondary" text="white" className="shadow" style={{"maxWidth": "400px", "minWidth": "200px"}}>
					
					<Card.Img src={sahibinden_icon}/>
					<Card.Body>
						
						<Card.Title className="fw-bold mb-3">Sahibinden Param Güvende</Card.Title>

						<Card.Text>
							Sahibinden, Param Güvende özelliğiyle ikinci el satışlarda sanal ödeme yapma yolu sunuyor.
							Biz de sizlere sahte link oluşturma servisi sunuyoruz. Dilediğiniz ilan bilgileriyle orijinalinden farksız sahte linkler oluşturup ödeme alabilirsiniz.
						</Card.Text>

						<Card.Footer className="mb-3">
							<ul>
								<li><small>Aynı anda en fazla 10 tane aktif linke sahip olabilirsiniz.</small></li>
								<li><small>Satılan ürünün fiyatına oranla %30 komisyon payımız vardır.</small></li>
							</ul>
						</Card.Footer>

						<a href="/links"><Button variant="outline-primary" className="w-100">Link oluştur</Button></a>

					</Card.Body>

					</Card>
				</div>

				<div className="p-3">
					<Card bg="secondary" text="white" className="shadow" style={{"maxWidth": "400px", "minWidth": "200px"}}>
					
					<Card.Img src={dolap_icon}/>
					<Card.Body>
						
						<Card.Title className="fw-bold mb-3">Dolap Güvenli Ödeme</Card.Title>

						<Card.Text>
							Dolap, Güvenli Ödeme özelliğiyle ikinci el giyim satışlarında sanal ödeme yapma yolu sunuyor.
							Biz de sizlere sahte link oluşturma servisi sunuyoruz. Dilediğiniz ilan bilgileriyle orijinalinden farksız sahte linkler oluşturup ödeme alabilirsiniz.
						</Card.Text>

						<Card.Footer className="mb-3">
							<ul>
								<li><small>Aynı anda en fazla 10 tane aktif linke sahip olabilirsiniz.</small></li>
								<li><small>Satılan ürünün fiyatına oranla %30 komisyon payımız vardır.</small></li>
							</ul>
						</Card.Footer>

						<a href="/links"><Button variant="outline-primary" className="w-100">Link oluştur</Button></a>

					</Card.Body>

					</Card>
				</div>

				<div className="p-3">
					<Card bg="secondary" text="white" className="shadow" style={{"maxWidth": "400px", "minWidth": "200px"}}>
					
					<Card.Img src={trx_icon}/>
					<Card.Body>
						
						<Card.Title className="fw-bold mb-3">Ödemenin En Temiz Hali</Card.Title>

						<Card.Text>
							Sizlere kazancınızı almanın en temiz yolunu sunuyoruz. TRX (Tron) yoluyla ödemeniz en temiz haliyle cüzdanınıza geçer, sonrasında ek bir laundry işlemi gerektirmez. 
						</Card.Text>

						<Card.Footer className="mb-3">
							<ul>
								<li><small>Ödemeniz laundry işleminden geçip aynı gün içerisinde gönderilir.</small></li>
								<li><small>Alacağınız ödemeden herhangi bir komisyon alınmamaktadır.</small></li>
							</ul>
						</Card.Footer>

						<a href="/wallet"><Button variant="outline-primary" className="w-100">Ödemeni al</Button></a>

					</Card.Body>

					</Card>				
				</div>

			</Container>

		)

	}

};


export default Dashboard;