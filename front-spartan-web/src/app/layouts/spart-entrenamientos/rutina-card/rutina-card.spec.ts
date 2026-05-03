import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RutinaCard } from './rutina-card';

describe('RutinaCard', () => {
  let component: RutinaCard;
  let fixture: ComponentFixture<RutinaCard>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [RutinaCard]
    })
    .compileComponents();

    fixture = TestBed.createComponent(RutinaCard);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
