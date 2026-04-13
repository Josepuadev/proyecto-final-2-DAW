import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RutinasSave } from './rutinas-save';

describe('RutinasSave', () => {
  let component: RutinasSave;
  let fixture: ComponentFixture<RutinasSave>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [RutinasSave]
    })
    .compileComponents();

    fixture = TestBed.createComponent(RutinasSave);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
