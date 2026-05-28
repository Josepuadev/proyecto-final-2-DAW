import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BuscadorEjercicios } from './buscador-ejercicios';

describe('BuscadorEjercicios', () => {
  let component: BuscadorEjercicios;
  let fixture: ComponentFixture<BuscadorEjercicios>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BuscadorEjercicios]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BuscadorEjercicios);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
